<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class AdmissionController extends Controller
{
    public function offerAdmission($id)
    {
        $user = User::find($id);
        $user->admission_status = 1;
        $user->save();

        // $user = $registration->user;
        // Mail::to($user->email)->send(new Admission($user));

        Session::flash('info', 'Applicant successfully offered admission');
        return redirect()->back();
    }

    public function declineAdmission($id)
    {
        $user = User::find($id);
        $user->admission_status = 0;
        $user->admission_accepted = 0;
        $user->save();

        Session::flash('info', 'Applicant admission has been successfully revoked');
        return redirect()->back();
    }
}
