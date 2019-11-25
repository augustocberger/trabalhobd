<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Moradores;
use Faker\Generator as Faker;

$factory->define(Moradores::class, function (Faker $faker) {

    return [
        'cpf' => $faker->randomDigitNotNull,
        'nome' => $faker->text,
        'endereco' => $faker->text,
        'telefone' => $faker->word
    ];
});
