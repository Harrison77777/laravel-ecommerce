<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;
use App\Brand;
$factory->define(Product::class, function (Faker $faker) {
    return [
        "category_id" => Category::all()->random()->id,
        "brand_id" => Brand::all()->random()->id,
        "title" => $faker->name,
        "description" => $faker->text,
        "image" => $faker->imageUrl,
        "price" => random_int(100, 1000),
        "sale_price" => random_int(100, 1000),
    ];
});
