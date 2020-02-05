<?php

use App\Models\ItemSales;
use App\Models\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Sales = [
            [
                'item_id'=> 1,
                'service_id'=> 1,
                'total_cost'=> 30000,
                'quantity'=> 400,
                'type'=> 'goods',
                'user_id'=> '1'
            ],
            [
                'item_id'=> 2,
                'service_id'=> 2,
                'total_cost'=> 60000,
                'quantity'=> 300,
                'type'=> 'goods',
                'user_id'=> '2'
            ],
            [
                'item_id'=> 3,
                'service_id'=> 3,
                'total_cost'=> 50000,
                'quantity'=> 200,
                'type'=> 'goods',
                'user_id'=> '3'
            ]
        ];


        foreach ($Sales as $sale) {
            ItemSales::create(array(
                'item_id' => $sale['item_id'],
                'service_id' => $sale['service_id'],
                'total_cost' => $sale['total_cost'],
                'quantity' => $sale['quantity'],
                'type' => $sale['type'],
                'user_id' => $sale['user_id'],
            ));
        }
    }
}
