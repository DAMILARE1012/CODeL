<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subject;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
//begin O-Level Subject
    public function subject()
    {
        $subject = DB::table('subjects')->get();
        return view('admin.subject', compact('subject'));
    }

    public function addsubject()
    {
        
        return view('admin.addsubject');
    }

    public function storesubject(Request $request)
    {
        $validatedData = $request->validate([

             'subject' => 'required',
             ]);          
            $subject = new Subject();
            
            $subject->subject =$request->subject; 
            $subject->save();
            return redirect()->route('admin.subject')->with('success', 'Subject Added');
    }
    public function deletesubject($id)
    {
         Subject::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }
    //end O-Level Subject
}
