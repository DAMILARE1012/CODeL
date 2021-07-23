<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;
    public function redirectTo()
    {
        
        switch(Auth::user()->role_id){
            case 1:
                $this->redirectTo = route('admin.dashboard');
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = route('user.dashboard');
                return $this->redirectTo;
                break;
            case 3:
            $this->redirectTo = route('manager.dashboard');
            return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
            }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role_id' => ['required'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'dob' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'program' => ['required'],
            'phone' => ['required', 'string', 'max:255'],
            'count' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        

        return User::create([
            'role_id' => $data['role_id'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'phone' => $data['phone'],
            'count' => $data['count'],
            'dob' => $data['dob'],
            'program' => $data['program'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'state' => $data['state'],
        ]);

    }
}

