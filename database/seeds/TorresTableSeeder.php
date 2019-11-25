<?php

use Illuminate\Database\Seeder;

class TorresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Torre')->insert([
            'latitude'=> rand (100,999).".".rand(100,999),
            'longitude'=> rand (100,999).".".rand(100,999),
            'municipio'=> Str::random(10),
            'id_peca'=> rand (100,999)
        ]);
    }
}
