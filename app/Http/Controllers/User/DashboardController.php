<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
    	$user = DB::table('users')->where('id', Auth::id())->first();
        return view('user_.index', compact('user'));
    }
}
