<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function chooseSubjects()
    {   
        $olevel = Olevel::where('user_id', Auth::id())->first();

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
