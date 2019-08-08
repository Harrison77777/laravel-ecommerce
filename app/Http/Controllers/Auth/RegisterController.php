<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\VarifyEamilNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVarification;
use Illuminate\Http\Request;
use App\Events\EmailVerifyEvent;

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
    protected function validator($request)
    {
        // return Validator::make($request,[
        //     'username' => ['required', 'string', 'max:30'],
        //     'email' => ['required', 'string', 'email', 'max:30', 'unique:users,email'],
        //     'division' => ['required', 'string', 'max:50'],
        //     'district' => ['required', 'string', 'max:50'],
        //     'shipping_address' => ['required', 'string', 'max:100'],
        //     'street_address' => ['required', 'string',  'max:50'],
        //     'zip_code' => ['required', 'numeric', 'min:3'],
        //     'phone_no' => ['required', 'numeric', 'min:13','unique:users'],
        //     'password' => ['required', 'string', 'min:3', 'confirmed'],
        // ]);
        return $request->validate([
            'username' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users,email'],
            'division' => ['required', 'string', 'max:50'],
            'district' => ['required', 'string', 'max:50'],
            'shipping_address' => ['required', 'string', 'max:100'],
            'street_address' => ['required', 'string',  'max:50'],
            'zip_code' => ['required', 'numeric', 'min:3'],
            'phone_no' => ['required', 'numeric', 'min:13','unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $this->validator($request);
        // $request->validate([
        //     'username' => ['required', 'string', 'max:30'],
        //     'email' => ['required', 'string', 'email', 'max:30', 'unique:users,email'],
        //     'division' => ['required', 'string', 'max:50'],
        //     'district' => ['required', 'string', 'max:50'],
        //     'shipping_address' => ['required', 'string', 'max:100'],
        //     'street_address' => ['required', 'string',  'max:50'],
        //     'zip_code' => ['required', 'numeric', 'min:3'],
        //     'phone_no' => ['required', 'numeric', 'min:13','unique:users'],
        //     'password' => ['required', 'string', 'min:3', 'confirmed'],
        // ]);
       $user = User::create
        (
            [

            'username' => request('username'),
            'email' => strtolower(request('email')),
            'division' => request('division'),
            'district' => request('district'),
            'shipping_address' => request('shipping_address'),
            'street_address' => request('street_address'),
            'zip_code' => request('zip_code'),
            'division' => request('division'),
            'phone_no' => request('phone_no'),
            'ip_address' => request()->ip(),
            'password' => Hash::make(request('password')),
            'remember_token' => str_random(50),
            'status' => 0,

            ]
        );
        $user->notify(new VarifyEamilNotification($user));
      // Mail::to($user->email)->queue(new EmailVarification($user));
        //event(new EmailVerifyEvent($user));
        session()->flash('successMsg', 'Successfully you have register.Please check your mail and verify your email address!!');
        return back();
    }
}
