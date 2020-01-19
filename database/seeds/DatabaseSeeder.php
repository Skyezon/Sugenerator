<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(InternalTableSeeder::class);
        // $this->call(InternalGenTableSeeder::class);
        $this->call(InternalProdukSeeder::class);
    }
}
