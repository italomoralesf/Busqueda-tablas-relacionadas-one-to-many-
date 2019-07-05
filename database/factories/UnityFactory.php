<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Unity;
use Faker\Generator as Faker;

$factory->define(Unity::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
    ];
});
