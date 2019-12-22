<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            [
                'id' => 1,
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'utility_id'=>1,
                'procedure_id'=>1,
                'gear_id'=>1,
                'model_id' => 1,
                'license_plate'=>'30E-232.21',
                'name' => 'Lamborghini',
                'price' => 3000000,
                'seat' => 4,
                'image_id' => 1,
                'capacity'=>1,
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'view' => 4,
                'address' => 'Ha Noi',
                'status' => 4,
            ],

        ]);
    }
}
