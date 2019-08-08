<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Cart;
use PDF;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['carts', 'user'])->get();
        return view('admin/order/index', compact('orders'));
    }

    public function details($orderId)
    {
        $order = Order::find( $orderId);
        $order->is_seen_by_admin = 1;
        $order->save();
       return  view('admin/order/details',compact('order'));
    }
    public function delete($cartId)
    {
        $cart = Cart::find($cartId);
        if (!is_null($cart)) {
            $cart->delete(); 
        }
        return back();
    }
    public function updatePaid($Id)
    {
        //$order = Cart::where('id',$Id)->firstOrFail();
        $order = Order::find($Id);
       
        if ($order->is_paid == 0) {
           $order->update([
            'is_paid' => 1,  
           ]);
        }else{
            $order->update([
                'is_paid' => 0,  
               ]);
        }
        return back();
    }
    public function updateComplete($Id)
    {
        //$order = Cart::where('id',$Id)->firstOrFail();
        $order = Order::find($Id);
        if ($order->is_completed == 0) {
           $order->update([
            'is_completed' => 1,  
           ]);
        }else{
            $order->update([
                'is_completed' => 0,  
               ]);
        }
        return back();
    }
    public function orderDelete($Id)
    {
        $order = Order::where('id',$Id)->first();
        if (!is_null($order)) {
            $order->delete();
        }
        return back();
    }
    public function invoice($orderId)
    {
        //$orders = Order::find($orderId);

        $pdf = PDF::loadView('pdfGenerator');
        // return $pdf->stream('invoice.pdf');
       return $pdf->stream('document.pdf'); 
       //return $pdf->download('invoice.pdf');
        //$pdf->download('invoice.pdf');
       
    }
   
}
