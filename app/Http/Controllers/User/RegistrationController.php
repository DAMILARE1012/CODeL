<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Subject;
use App\Olevel;
use App\Credential;
use App\Order;
use App\PaymentList;
use Image;
use Session;

class RegistrationController extends Controller
{
    public function chooseSubjects()
    {	
        $olevel = DB::table('olevels')->where('user_id', Auth::id())->first();

        if (!$olevel) {

            $selectedSubjects = DB::table('subjects')->where('id', 0)->get();

        	$subjects = Subject::all();
        	return view('user_.credentials-upload', compact('subjects', 'selectedSubjects'));

        }else{
            Session::flash('status', 'Result has already been submitted.');
            return redirect()->route('user.upload.files');
        }
    }

        public function processSelectedSubjects(Request $request)
    {
        $this->validate($request, [
            'subjects' => 'required',
            'sittings' => 'required',
        ]);
        $selectedSubjects = Subject::findMany($request->subjects);  
        $selectedSittings = $request->sittings;

        Session::flash('selectedSubjects', $selectedSubjects);
        Session::flash('selectedSittings', $selectedSittings);
        return redirect()->back();
    }

    public function submitResults(Request $request)
    {

        $selectedSubjects = Subject::findMany($request->sSubjects);
        $selectedSittings = $request->sittings;

        Session::flash('selectedSubjects', $selectedSubjects);
        Session::flash('selectedSittings', $selectedSittings);

        $this->validate($request, [
            'exam_number' => 'required',
            'exam_year' => 'required',
            'examination' => 'required',
        ]);

        $grade = new Olevel;
        $grade->user_id = Auth::id();
        $grade->exam_number = $request->exam_number;
        $grade->exam = $request->examination;
        $grade->exam_year = $request->exam_year;

        $grade->exam_number2 = $request->exam_number2;
        $grade->exam2 = $request->examination2;
        $grade->exam_year2 = $request->exam_year2;

        $grade->subjects = implode($request->subjects, ',');
        $grade->grades = implode($request->grades, ',');
        $grade->sittings = $request->sittings;
        
        $grade->save();


        DB::table('users')->where('id', Auth::id())->update(['count' => 2]); 


        return redirect()->route('user.upload.files');
    }

    public function uploadFiles()
    {
        $olevel = Olevel::where('user_id', Auth::id())->first();
        $credential = Credential::where('user_id', Auth::id())->first();

        if (!$credential) {

           return view('user_.file-upload', compact('olevel'));
        }else{
            Session::flash('status', 'Files have been previously uploaded.');
            return redirect()->route('user.dashboard');
        }
    }

    public function submitFiles(Request $request )
    {
        $this->validate($request, [
            'passport' => 'required|mimes:jpeg,png,jpg|max:2048',
            'olevel1' => 'required|mimes:pdf',
            'olevel2' => 'mimes:pdf',
            'other' => 'mimes:pdf',
            'birth_certificate' => 'required|mimes:pdf',
        ]);
            
            $olevel1 = $request->olevel1;
            $olevel1_name = Auth::id() . time() . $olevel1->getClientOriginalName();
            $olevel1->move('/images/credentials/olevel/', $olevel1_name);

            $birth_certificate = $request->birth_certificate;
            $birth_certificate_name = Auth::id() . time() . $birth_certificate->getClientOriginalName();
            $birth_certificate->move('/images/credentials/birth/', $birth_certificate_name);  
            
            $path = public_path().'/images/credentials/passportz/';      
                $originalImage = $request->file('passport');
                $name = time().$originalImage->getClientOriginalName();
                $image = Image::make($originalImage);
                $image->resize(450, 450);
                $image->save($path.$name); 

            $upload = Credential::create([
                'user_id' => Auth::id(),
                'olevel1' => $olevel1_name,
                'birth_certificate' => $birth_certificate_name,
                'passport' => $name,
                
            ]);

            if ($request->hasFile('olevel2')) {
                $olevel2 = $request->olevel2;
                $olevel2_name = Auth::id() . time() . $olevel2->getClientOriginalName();
                $olevel2->move('/images/credentials/olevel/', $olevel2_name);
                $upload->olevel2 = $olevel2_name;
                $upload->save();
            }

            if ($request->hasFile('other')) {

                $other = $request->other;
                $other_name = Auth::id() . time() . $other->getClientOriginalName();
                $other->move('/images/credentials/others/', $other_name);

                $upload->other = $other_name;
                $upload->save();
            }

            DB::table('users')->where('id', Auth::id())->update(['count' => 3]); 
            return redirect()->route('user.dashboard');
            }  

    public function makeOrder()
    {
        $orderExist = Order::where(['user_id' => Auth::id(), 'status' => 0])->first();
        if ($orderExist) {
            $order = Order::where(['user_id' => Auth::id(), 'status' => 0])->first();
            $paymentList = PaymentList::first();
            
            return view('user_.registration-pay', compact('paymentList', 'order'));
        } 

        $paymentList = PaymentList::first();
        $order = Order::create([
            'user_id' => Auth::id(),
            'payment_list_id' => $paymentList->id,
            'amount' => $paymentList->amount
        ]);

        return view('user_.registration-pay', compact('paymentList', 'order'));
    }
    
    }
