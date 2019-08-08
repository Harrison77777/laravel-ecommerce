<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use App\User;
use Redirect,Response;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {

        
            // $carts = Cart::where('user_id', auth()->id())
            // ->where('ip_address', request()->ip())->get();
            // return view('frontend/addToCart/cart', compact('carts'));
     
        $carts = Cart::with('product')->Where('ip_address', request()->ip())
        ->where('order_id', NULL)
        ->select('id')->get();
            return view('frontend/addToCart/cart', compact('carts'));

        

    }
    
    public function addToCart(Request $request)
    {
        
        request()->validate
        (
            [
                "quantity" => "required|numeric",
                "product_id" => "required|numeric",
            ]
        );
        $sameCartRow = Cart::where('ip_address',request()->ip())
        ->where('product_id', request('product_id'))->where('order_id', null)->first();
        if ($sameCartRow) {
            $sameCartRow->increment('product_quantity');
            session()->flash('errorMsg', 'This product has been taken into the cart');
            return redirect()->route('cartIndex');
         }else {
             $cart = new Cart();
            //  if (Auth::check()) {
            //     $cart->user_id = Auth::user()->id;
            //  }
             $cart->product_id = request('product_id');
             $cart->product_quantity = request('quantity');
             $cart->ip_address = request()->ip();
             $cart->save();
             session()->flash('successMsg', 'Successfully product added into the cart!!');
             return redirect()->route('cartIndex');
         }

       
    }

    public function updateCartQuantity(Request $request, $cartId)
    {
       $valid =  Validator::make($request->all(),
            [
                'cart_quantity' => 'required'
            ]
        );
        if ($valid->passes()) {

            if (request('cart_quantity') < 1) {
                return  response()->json(['errorMsg' => 'Cart quantity must be at least 1 or greater then 1']);
                
            }else{
                
                $updateQuantities = Cart::find($cartId);
                $updateQuantities->product_quantity = request('cart_quantity');
                $updateQuantities->save();

                $countProductQuantities = Cart::where('ip_address',$request->ip())
                ->where('order_id', NULL)->get();
                $cartQuantityCount = 0;
                foreach ($countProductQuantities as $countProductQuantity) {
                    $quantity = $countProductQuantity->product_quantity;
                    $cartQuantityCount = $cartQuantityCount + $quantity;
                }
                return response()->json(['successMsg' => 'Successfully updated product quantity!!', 'cartQuantityCount' => $cartQuantityCount]);
    
            }
        }else{
            return response()->json(['errors'=> $valid->errors()->all()]);
        }

        
        
    }

     public function deleteCart(Request $request)
     {
     
         $cart = Cart::find($request->cartId);
        $cartDelete = $cart->delete();
        if ($cartDelete) {
            $countProductQuantities = Cart::where('ip_address',$request->ip())
            ->where('order_id', NULL)->get();
            $cartQuantityCount = 0;
            foreach ($countProductQuantities as $countProductQuantity) {
                $quantity = $countProductQuantity->product_quantity;
                $cartQuantityCount = $cartQuantityCount + $quantity;
            }
            return response()->json(['cartDeleteSuccessMsg' => 'Successfully the cart has been deleted!!!', 'cartQuantityCount' => $cartQuantityCount]);
        }else{
            return response()->json(['cartDeleteErrorMsg' => 'Something went wrong!!!']);
        }
         
         
     }
     public function showCartProducts(){
        $carts = Cart::with('product', 'product.images')->Where('ip_address', request()->ip())->where('order_id', NULL)->get();
        if($carts->count() > 0){
            return response()->json(['carts'=>$carts]);  
        }else{
            return response()->json(['cartEmptyMsg' => 'There is no product in your cart']);
        }
       
     }

}
