<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\AcademicSession;
use App\Registration;
use App\User;

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

    public function registrationsbySessions($id){
        
        $session = AcademicSession::find($id);
        $registrations = User::where('admission_session', $session->session)->get();
        return view('manager.registration.registrations', compact('registrations', 'session'));

    }
}
