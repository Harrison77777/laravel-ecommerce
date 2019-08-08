<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $guarded = [];
    protected $fillable = [
        'category_name', 'banner',  'category_id', 
    ];

    public function parent_category()
    {
        return $this->belongsTo(Category::class);
    }
    public function child_categories()
    {
        return $this->hasMany(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function($category){
            $category->slug = str_slug($category->name);
        });
    }
}
