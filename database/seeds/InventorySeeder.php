<?php

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Inventory = [
            [
                'code' => 'SP',
                'size' => 'Small',
                'cost' => 1500,
                'saleable' => true,
                'quantity' => 10,
                'minimum_quantity' => 3,
                'brand' => 'Bosch'
            ],
            [
                'code' => 'TY',
                'size' => 'Medium',
                'cost' => 4500,
                'saleable' => true,
                'quantity' => 100,
                'minimum_quantity' => 10,
                'brand' => 'Pirelli'
            ],
            [
                'code' => 'MR',
                'size' => 'Large',
                'cost' => 5500,
                'saleable' => true,
                'quantity' => 10,
                'minimum_quantity' => 3,
                'brand' => 'Bosch'
            ]
        ];


        foreach ($Inventory as $inventory) {
            Inventory::create(array(
                'code' => $inventory['code'],
                'size' => $inventory['size'],
                'cost' => $inventory['cost'],
                'saleable' => $inventory['saleable'],
                'quantity' => $inventory['quantity'],
                'minimum_quantity' => $inventory['minimum_quantity'],
                'brand' => $inventory['brand']
            ));
        }
    }
}
