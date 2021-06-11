<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function chooseSubjects()
    {	$olevel = OlevelGrade::where('user_id', Auth::id())->first();

        if (!$olevel) {

            $selectedSubjects = Subject::where('id', 0)->get();
        	$subjects = Subject::all();
        	return view('dashboard.students.credentials-upload', compact('subjects', 'selectedSubjects'));
        }else{
            Session::flash('status', 'Result has already been submitted.');
            return redirect()->home();
        }
    }
}
