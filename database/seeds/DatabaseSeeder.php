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
        $this->call(InventorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SaleSeeder::class);
        
    }
}
