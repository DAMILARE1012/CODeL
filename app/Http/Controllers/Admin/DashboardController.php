<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subject;
use DB;
use Session;

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
        return view('admin.subject.subject', compact('subject'));
    }

    public function storesubject(Request $request)
    {
        $validatedData = $request->validate([

             'subject' => 'required',
             ]);          
            $subject = new Subject();
            
            $subject->subject =$request->subject; 
            $subject->save();
            Session::flash('info', 'Subject Added!');
            return redirect()->back();
    }
    public function deletesubject($id)
    {
        Subject::where('id', $id)->delete();   
        Session::flash('info', 'Subject Deleted!');
        return redirect()->back();
    }
    //end O-Level Subject
    public function registration_fees(){
        return view('admin.reg_fee');
    }
}
