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
    //Registred students start
    // get all the registered sessions
    public function registrations()
    {
        $academicSession = AcademicSession::all();
        return view('admin.registration.index', compact('academicSession'));
        
    }

    public function registrationsbySessions($id)
    {
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)->get(); //get all the registered users under the session selected
        $reg_section  = User::where('academic_session', $session->session)->first(); //so we can have the session on the top of the list 
        return view('admin.registration.registrations', compact('registrations', 'session', 'reg_section'));

    }
    //to see all the details of the selected user. 
    public function singleRegistration($id)
    {        
        $user = User::find($id);
        $credential = Credential::where('user_id', $user->id)->first();
        $olevel = Olevel::where('user_id', $user->id)->first();
        return view('admin.registration.single_reg', compact('user', 'olevel', 'credential'));
    }
    //Registrerd students end

    //Admitted students start
    public function Adregistrations()
    {
        $academicSession = AcademicSession::all();
        return view('admin.registration.Admit-index', compact('academicSession'));   
    }
    public function AdregistrationsbySessions($id)
    {
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)
        ->where( 'admission_status', 1)
        ->get(); //get all the registered users under the session selected
        $reg_section  = User::where('academic_session', $session->session)->first(); //so we can have the session on the top of the list 
        return view('admin.registration.Admit-registrations', compact('registrations', 'session', 'reg_section'));
    }
    //to see all the details of the selected user. 
    public function AdsingleRegistration($id)
    {        
        $user = User::find($id);
        $credential = Credential::where('user_id', $user->id)->first();
        $olevel = Olevel::where('user_id', $user->id)->first();
        return view('admin.registration.admit-single_reg', compact('user', 'olevel', 'credential'));
    }
    //Admitted students end

    //Accepted students start
    public function Acregistrations()
    {
        $academicSession = AcademicSession::all();
        return view('admin.registration.accept-index', compact('academicSession'));   
    }
    public function AcregistrationsbySessions($id)
    {
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)
        ->where( 'admission_accepted', 1)
        ->get(); //get all the users who have Accepted under the session selected
        $reg_section  = User::where('academic_session', $session->session)->first(); //so we can have the session on the top of the list 
        return view('admin.registration.accept-registrations', compact('registrations', 'session', 'reg_section'));
    }
    //to see all the details of the selected user. 
    public function AcsingleRegistration($id)
    {        
        $user = User::find($id);
        $credential = Credential::where('user_id', $user->id)->first();
        $olevel = Olevel::where('user_id', $user->id)->first();
        return view('admin.registration.accept-single_reg', compact('user', 'olevel', 'credential'));
    }
    //Accepted students end

    //Declined students start
    public function Deregistrations()
    {
        $academicSession = AcademicSession::all();
        return view('admin.registration.decline-index', compact('academicSession'));   
    }
    public function DeregistrationsbySessions($id)
    {
        $session = AcademicSession::find($id);
        $registrations = User::where('academic_session', $session->session)
        ->where( 'admission_accepted', '=', 2)
        ->get(); //get all the users who declined under the session selected
        $reg_section  = User::where('academic_session', $session->session)->first(); //so we can have the session on the top of the list 
        return view('admin.registration.decline-registrations', compact('registrations', 'session', 'reg_section'));
    }
    //to see all the details of the selected user. 
    public function DesingleRegistration($id)
    {        
        $user = User::find($id);
        $credential = Credential::where('user_id', $user->id)->first();
        $olevel = Olevel::where('user_id', $user->id)->first();
        return view('admin.registration.decline-single_reg', compact('user', 'olevel', 'credential'));
    }
    //Accepted students end
}
