<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
    public function images()
    {
        return $this->hasMany(Product_image::class,'product_id');
    }

    protected static function boot(){

        parent::boot();

        static::creating(function($product){
            $product->slug = str_slug($product->title);
        });  

    }
}
