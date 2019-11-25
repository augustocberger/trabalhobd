<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bens_morador;
use Faker\Generator as Faker;

$factory->define(Bens_morador::class, function (Faker $faker) {

    return [
        'id_bem' => $faker->randomDigitNotNull,
        'ID_Morador' => $faker->randomDigitNotNull
    ];
});
