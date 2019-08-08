<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class EmailVerifictionController extends Controller
{
    public function verify($token)
    {
       $user = User::where('remember_token', $token)->first(); 
        if (!is_null($user)) {
            $user->status = 1;
            $user->remember_token = NULL;
            $user->save();
            session()->flash('successMsg','Successfully you have registered. Please login');
            return redirect()->route('login');
        }else {
            abort(403);
            //session()->flash('errorMsg','Successfully you have registered. Please login'); 
        }
    }
}
