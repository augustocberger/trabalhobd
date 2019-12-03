<?php

use Illuminate\Database\Seeder;
use App\Models\Pecas;

class TorresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pecas = Pecas::all()->random()->get('id');
        DB::table('Torre')->insert([
            'latitude'=> rand (100,999).".".rand(100,999),
            'longitude'=> rand (100,999).".".rand(100,999),
            'municipio'=> Str::random(10),
            'id_peca'=>$pecas[rand(00,count($pecas)-1)]->id
        ]);
    }
}
