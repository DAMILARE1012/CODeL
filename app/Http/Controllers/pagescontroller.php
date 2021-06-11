<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function home(){
        return view('pages.front.homepage');
    }
    public function about(){
        return view('pages.front.about');
    }
    public function objectives(){
        return view('pages.front.objectives');
    }
    public function principles(){
        return view('pages.front.principles');
    }
    public function justifications(){
        return view('pages.front.justifications');
    }
    public function programmes(){
        return view('pages.front.programmes');
    }
    public function contact(){
        return view('pages.front.contact');
    }
    public function faqs(){
        return view('pages.front.faqs');
    }
    public function login(){
        return view('pages.front.login-form');
    }
    public function register(){
        return view('pages.front.register-form');
    }
    public function register_2(){
        return view('auth.register');
    }
}


