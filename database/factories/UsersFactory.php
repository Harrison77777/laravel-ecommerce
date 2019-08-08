<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(User::class, function (Faker $faker) {
    return [
        "username" =>$faker->name,
        "email" =>$faker->safeEmail,
        "phone" =>$faker->phoneNumber,
        "password" =>bcrypt('secret'),
        "email_verified_at" =>Carbon::now(),
    ];
});
