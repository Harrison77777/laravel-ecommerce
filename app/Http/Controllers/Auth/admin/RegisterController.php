<?php

namespace App\Http\Controllers\Auth\admin;

use App\User;
use App\Notifications\VarifyEamilNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

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
    protected function validator(Request $request)
    {
        return Validator::make($request,[
            'username' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users,email'],
            'phone_no' => ['required', 'numeric', 'min:13','unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'role' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register()
    {
       
       $user = AdminUser::create
        (
            [

            'username' => request('username'),
            'email' => strtolower(request('email')),
            
            'phone_no' => request('phone_no'),
            'password' => Hash::make(request('password')),
            'role' => request('role'),

            ]
        );
        session()->flash('successMsg', 'Successfully you have created a admin user!!');
        return back();
    }
}
