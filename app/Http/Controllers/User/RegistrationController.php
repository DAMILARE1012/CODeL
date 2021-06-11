<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Subject;
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
            return redirect()->home();
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

        Session::flash('selectedSubjects', $selectedSubjects);

        // dd($request->subjects);

        $this->validate($request, [
            'exam_number' => 'required',
            'exam_year' => 'required',
            'examination' => 'required',
        ]);

        try{
            $grade = new OlevelGrade;
            $grade->user_id = Auth::id();
            $grade->exam_number = $request->exam_number;
            $grade->exam = $request->examination;
            $grade->exam_year = $request->exam_year;

            $grade->exam_number2 = $request->exam_number2;
            $grade->exam2 = $request->examination2;
            $grade->exam_year2 = $request->exam_year2;

            $grade->subjects = implode($request->subjects, ',');
            $grade->grades = implode($request->grades, ',');
            
            $grade->save();
        }catch(\Illuminate\Database\QueryException $e){
            return back()->withError('O\'Level results has been previously submitted')->withInput();
        }
  
        return redirect()->home();

    }
    
}
