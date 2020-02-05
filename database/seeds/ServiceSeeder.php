<?php

use App\Models\Servicing;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Service = [
            [
                'code' => 'ENG',
                'description' => 'This is service for fixing the engine ',
                'cost' => 1500,
                'provided_by' => 'Samuel'
            ],
            [
                'code' => 'ELEC',
                'description' => 'This is service for fixing the car wiring',
                'cost' => 4500,
                'provided_by' => 'Mike'
            ],
            [
                'code' => 'MIR',
                'description' => 'This is service for fixing the the lights and mirrors',
                'cost' => 1000,
                'provided_by' => 'Bob'
            ]
        ];


        foreach ($Service as $service) {
            Servicing::create(array(
                'code' => $service['code'],
                'description' => $service['description'],
                'cost' => $service['cost'],
                'provided_by' => $service['provided_by'],
            ));
        }
    }
}
