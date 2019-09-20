<?php

use Illuminate\Database\Seeder;

class BurgersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Burger::create(['name' => 'Supreme', 'price' => 250]);
        \App\Burger::create(['name' => 'Géant', 'price' => 450]);
        \App\Burger::create(['name' => 'Must', 'price' => 300]);
    }
}
