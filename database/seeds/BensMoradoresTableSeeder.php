<?php

use Illuminate\Database\Seeder;
use App\Models\Bens;
use App\Models\Moradores;

class BensMoradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moradores = Moradores::all()->random()->get('id');
        $bens= Bens::all()->random()->get('id');

        DB::table('Bens_morador')->insert([
            'id_bem'=> $bens[rand(00,count($bens)-1)]->id,
            'id_morador'=>$moradores[rand(00,count($bens)-1)]->id
        ]);
    }
}
