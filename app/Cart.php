<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [ 
        'product_id',
        'order_id',
        'user_id',
        'product_quantity',
        'ip_address',
    ];
    public function product ()
    {
        return $this->belongsTo(Product::class);
    }
    public function order ()
    {
        return $this->belongsTo(Order::class);
    }
    
    public static function totalItems()
    {
    if (Auth::check()) {
      $carts = Cart::where('user_id', Auth::id())
      ->where('order_id', NULL)
      ->get();
    }else {
      $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
    }

    $total_item = 0;

    foreach ($carts as $cart) {
      $total_item += $cart->product_quantity;
    }
    return $total_item;
   }

  

}
