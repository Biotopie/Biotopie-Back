<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modules;
use Faker\Generator as Faker;

$factory->define(Modules::class, function (Faker $faker) {
    return [
        Modules::NAME => $faker->name,
        Modules::PRICE => $faker->unique()->numberBetween(100, 200)
    ];
});
