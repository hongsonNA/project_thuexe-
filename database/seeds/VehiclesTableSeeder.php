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
                'name' => 'Lamborghini',
                'seat' => 4,
                'description' => 'A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 4,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image' => 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/restyle/Sabbia/Cover_Urus_.jpg',
                'status' => 4,
            ],
        ]);
    }
}
