<?php

namespace App\Http\Controllers\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Notifications\VarifyEamilNotification;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'frontend/addToCart/cart';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // public function showLoginForm()
    // {
    //     return view('auth/login');
    // }
    public function login(){
        request()->validate
        (
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        $user = User::where('email', request('email'))->first();
        if ($user) {
            if ($user->status == 1) {
            
                if (Auth::guard('web')->attempt(['email'=>request('email'), 'password'=>request('password')], request('remember'))) {
                    
                    Toastr::success("Successfully you have logged in.", "success", ["positionClass" => "toast-bottom-right"]);
                   return redirect()->intended(route('cartIndex')); 
                   
                }else{
    
                    session()->flash('errorMsg', ' E-mail or Password not matched.!!');
                    return redirect()->route('login'); 
        
                    }
               
                // elseif(!is_null($user)) {
                //         $user->notify(new VarifyEamilNotification($user));
                //         session()->flash('successMsg', 'A new confirmation email has been sended . Please check your mail!!');
                //         return back();
                    
                // }
                
                } 
            }else{
    
            session()->flash('errorMsg', 'E-mail or Password not matched.!!');
            return back(); 

            }


    }
    
}
