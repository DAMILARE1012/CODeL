<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Olevel;
use App\Order;
use App\Credential;
use App\RegOrder;
use Image;


class DashboardController extends Controller
{
    public function index()
    {

        $registration_fee = RegOrder::where('user_id', Auth::id())->first();
        $acceptance_fee = Order::where('user_id', Auth::id())->first();
        $olevel = Olevel::where('user_id', Auth::id())->first();
        $credential = Credential::where('user_id', Auth::id())->first();
    	$user = DB::table('users')->where('id', Auth::id())->first();
        return view('user_.index', compact('user', 'olevel', 'credential', 'acceptance_fee', 'registration_fee'));
    }

    public function acceptAdmission(Request $request)
    {
       $user = Auth::user();
        $this->validate($request, [
            'signature' => 'required|mimes:jpeg,jpg,png',
        ]);
        $signature = $request->signature;
        $signature_name = Auth::id() . time() . $signature->getClientOriginalName();
        Image::make($signature)->resize(300, 100)->save('images/credentials/signature/' . $signature_name);

        $user->signature = $signature_name;
        $user->admission_accepted = '1';
        $user->save(); 
        Session::flash('status', 'Admission successfully accepted');
        return redirect()->route('user.student');

    }

    public function studentindex()
    {
        $registration_fee = RegOrder::where('user_id', Auth::id())->first();
        $acceptance_fee = Order::where('user_id', Auth::id())->first();
        $olevel = Olevel::where('user_id', Auth::id())->first();
        $credential = Credential::where('user_id', Auth::id())->first();
        $user = DB::table('users')->where('id', Auth::id())->first();
        return view('user_.studentindex', compact('user', 'olevel', 'credential', 'acceptance_fee', 'registration_fee'));
    }
}
