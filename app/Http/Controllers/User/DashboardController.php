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
}
