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
    
}
