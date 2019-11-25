<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fornecedores;
use Faker\Generator as Faker;

$factory->define(Fornecedores::class, function (Faker $faker) {

    return [
        'papel' => $faker->word,
        'cnpj' => $faker->word,
        'raz_social' => $faker->word,
        'endereco' => $faker->text,
        'telefone' => $faker->text
    ];
});
