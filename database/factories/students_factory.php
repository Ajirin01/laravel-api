<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\students_model::class, function (Faker $faker) {
    return [
        //
        'student_name' => $faker->name,
        'class_model_id' => $faker->numberBetween(1,30)
    ];
});
