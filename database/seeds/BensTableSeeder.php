<?php

use Illuminate\Database\Seeder;

class BensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Bens')->insert([
            'bem'=> Str::random(10)
        ]);
    }
}
