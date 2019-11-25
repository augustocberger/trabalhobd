<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BensTableSeeder::class);
         $this->call(MoradoresTableSeeder::class);
         $this->call(FornecedoresTableSeeder::class);
         $this->call(PecasTableSeeder::class);
         $this->call(TorresTableSeeder::class);
         $this->call(BensMoradoresTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
