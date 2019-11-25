<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Torres;
use Faker\Generator as Faker;

$factory->define(Torres::class, function (Faker $faker) {

    return [
        'Latitude' => $faker->randomDigitNotNull,
        'Longitude' => $faker->randomDigitNotNull,
        'Municipio' => $faker->word,
        'id_peca' => $faker->randomDigitNotNull
    ];
});
