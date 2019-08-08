<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $guarded =[];
    protected $fillable = [
        'ip_address',
        'user_id',
        'name',
        'phone_no',
        'shipping_address',
        'email',
        'message',
        'ip_address',
        'is_paid',
        'is_completed',
        'is_seen_by_admin',
        'payment_method',
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function carts() 
    {
        return $this->hasMany(Cart::class, 'order_id');
    }

}
