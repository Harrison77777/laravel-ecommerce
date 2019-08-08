<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class UserDashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        
        return view('frontend/userDashboard/index');
    }

    public function show()
    {
         $user = User::where('id', Auth::user()->id)->firstOrFail();
        return view('frontend/userDashboard/show', compact('user'));
    }
    public function edit()
    {
        // $user = User::where('id', $userId)->firstOrFail();

        // abort_if($userId !== Auth::user()->id,403);

        return view('frontend/userDashboard/edit');
    }
    public function update(Request $request)
    {
      
    $user = User::find(Auth::user()->id);
        
      $data =  $request->validate
       (
            [
                'username' => 'required',
                'phone_no' => 'required',
                'shipping_address' => 'required',
                'street_address' => 'required',
                'zip_code' => 'required',
                'division' => 'required',
                'district' => 'required',
            ]
      );
      
           
        $user->update($data);
       
        return back();
    }
}
