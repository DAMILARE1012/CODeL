<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use App\AcademicSession;
use App\Registration;
use App\Olevel;
use App\Credential;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrations()
    {
        //
        $registrations = User::all();
        $academicSession = AcademicSession::all();
        return view('admin.registration.index', compact('academicSession', 'registrations'));
        
    }

    public function registrationsbySessions($id){
        
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)->get();
        $reg_section  = User::where('academic_session', $session->session)->first();
        return view('admin.registration.registrations', compact('registrations', 'session', 'reg_section'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function singleRegistration($id)
    {        
        $user = User::find($id);
        $credential = Credential::where('user_id', $user->id)->first();
        $olevel = Olevel::where('user_id', $user->id)->first();
        return view('admin.registration.single_reg', compact('user', 'olevel', 'credential'));
    }

    public function registered_users(){

        
        return view("admin.registered_users", compact('registrations') );

    }
}
