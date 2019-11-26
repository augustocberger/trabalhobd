<?php

use Illuminate\Database\Seeder;

class MoradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Moradores')->insert([
            'cpf'=>rand (100,999).".".rand(100,999).".".rand(100,999)."-".rand(00,99),
            'nome'=> Str::random(10),
            'endereco'=> Str::random(10),
            'telefone'=> rand (3000,3999)."-".rand(1000,9999)
        ]);
    }
}
