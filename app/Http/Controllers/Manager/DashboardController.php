<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\AcademicSession;
use App\Registration;
use App\User;
use App\PaymentList;

class DashboardController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function registrations()
    {
        $academicSession = AcademicSession::all();
        return view('manager.registration.index', compact('academicSession'));
        
    }

    public function registrationsbySessions($id)
    {
        
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)->get();
        $reg_section  = User::where('academic_session', $session->session)->first();
        return view('manager.registration.registrations', compact('registrations', 'session', 'reg_section'));

    }

    public function fees_list()
    {
        $fees_list = PaymentList::get();
        return view('manager.fees_list', compact('fees_list'))->with('no', 1);
    }
}
