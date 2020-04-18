<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\cart_model as cart;
use Faker\Generator as Faker;

$factory->define(cart::class, function (Faker $faker) {
    return [
        //
        'item_name' => $faker->text(30),
        'item_price' => $faker->numberBetween(200,1000),
        'item_image_url' => $faker->imageUrl()
    ];
});
