<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pecas;
use Faker\Generator as Faker;

$factory->define(Pecas::class, function (Faker $faker) {

    return [
        'peca' => $faker->word,
        'valor' => $faker->randomDigitNotNull,
        'id_fornecedor' => $faker->randomDigitNotNull
    ];
});
