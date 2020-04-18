<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\class_model::class, function (Faker $faker) {
    $class_name = $faker->name;
    return [
        //
        'class_name'=>"CLASS " .$class_name,
    ];
});
