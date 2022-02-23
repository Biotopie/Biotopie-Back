<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Formules;
use Faker\Generator as Faker;

$factory->define(Formules::class, function (Faker $faker) {
    return [
        Formules::NAME => $faker->text
    ];
});
