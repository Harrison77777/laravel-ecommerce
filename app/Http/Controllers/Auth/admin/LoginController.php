<?php

namespace App\Http\Controllers\Auth\admin;
use Brian2694\Toastr\Facades\Toastr;
use App\AdminUser;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = 'backend/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('guest')->except('logout');
    }
    
    public function showLoginForm()
    {
        if (!Auth::guard('admin')->check()) {
            return view('admin/auth/login');
         }else{
             return redirect()->route('dashboard');
             //return back();
         }
            
         
        
    }

    public function login(){
        
        request()->validate
        (
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
       
        $admin = AdminUser::where('email', request('email'))->first();
        if ($admin) {
            
                if (Auth::guard('admin')->attempt(['email'=>request('email'), 'password'=>request('password')], request('remember'))) {
                    
                    Toastr::success("Successfully you have logged in.", "success", ["positionClass" => "toast-top-right"]);
                   return redirect()->intended(route('dashboard')); 
                   
                }else{
    
                    session()->flash('errorMsg', ' E-mail or Password not matched.!!');
                    return redirect()->route('admin.login'); 
                    //return redirect()->route('admin.login'); 
        
                }
    }else {
        session()->flash('errorMsg', ' E-mail or Password not matched.!!');
        return redirect()->route('admin.login');
        //return redirect()->back();
    }
}





public function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    //return $this->loggedOut($request) ?:redirect()->route('admin.login');
    return $this->loggedOut($request) ?:redirect()->back();
}
}