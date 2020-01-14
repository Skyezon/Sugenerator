<?php

use Illuminate\Database\Seeder;

class InternalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Internal::class, 50)->create()->each(function ($Internal) {
           factory(App\Internal::class)->make();
        });
    }
}
