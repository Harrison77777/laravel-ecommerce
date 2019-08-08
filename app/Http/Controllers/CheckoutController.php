<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use Auth;
class CheckoutController extends Controller
{
    function __construct(){
        $this->middleware('auth:web');
    }
    public function index()
    {
        $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        return view('frontend/checkOut/index', compact('carts'));
    }

    public function order()
    {
        if (request('payment_method') !== 'Cash_on_dalivari') {
            request()->validate([
                'payment_number' => 'required|numeric'
            ]);
        }
        
        $order = Order::create
        (
            [
                'ip_address' => request()->ip(),
                'user_id' => auth()->id(),
                'name' => Auth::user()->username,
                'shipping_address' => Auth::user()->shipping_address,
                'phone_no' => Auth::user()->phone_no,
                'email' => Auth::user()->email,
                'message' => request('message'),
                'payment_method' => request('payment_method')
            ]
        );
        //$carts = Cart::where('ip_address', request()->ip());
        $carts = Cart::where('ip_address', request()->ip())->get();
       

        if ($order) {
          foreach ($carts as $cart) {
              $cart->order_id = $order->id;
              $cart->user_id = Auth::user()->id;
              $cart->save();
          }  
        }
        //$carts->delete();
        return redirect()->route('home');
    }
}
