<?php

use Illuminate\Database\Seeder;
use App\Models\Fornecedores;

class PecasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedores = Fornecedores::all()->random()->get('id');
        DB::table('Pecas')->insert([
            'peca'=> Str::random(10),
            'valor'=> rand (100,9999),
            'id_fornecedor'=>$fornecedores[0]->id
        ]);
    }
}
