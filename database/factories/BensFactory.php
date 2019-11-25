<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bens;
use Faker\Generator as Faker;

$factory->define(Bens::class, function (Faker $faker) {

    return [
        'bem' => $faker->text
    ];
});
