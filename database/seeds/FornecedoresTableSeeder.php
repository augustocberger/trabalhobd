<?php

use Illuminate\Database\Seeder;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Fornecedor')->insert([
            'papel'=> Str::random(10),
            'cnpj'=> rand (100,999).".".rand(100,999).".".rand(100,999)."-".rand(00,99),
            'raz_social'=> Str::random(10),
            'endereco'=> Str::random(10),
            'telefone'=> rand (1000,9999)."-".rand(1000,9999)
        ]);
    }
}
