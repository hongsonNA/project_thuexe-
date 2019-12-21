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
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 4,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image_id' => 'anhmau.jpeg',
                'status' => 4,
            ],
            [
                'id' => 2,
                'name' => 'Lamborghini',
                'seat' => 4,
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 1,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image' => 'anhmau.jpeg',
                'status' => 4,
            ],
            [
                'id' => 3,
                'name' => 'Lamborghini',
                'seat' => 4,
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 2,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image' => 'anhmau.jpeg',
                'status' => 4,
            ],
            [
                'id' => 4,
                'name' => 'Lamborghini',
                'seat' => 4,
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 3,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image' => 'anhmau.jpeg',
                'status' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Lamborghini',
                'seat' => 4,
                'description' => 'A car (or automobile) is a wheeled motor Vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id' => 4,
                'price' => 3000000,
                'model_id' => 1,
                'view' => 4,
                'address' => 'Ha Noi',
                'city_id' => 4,
                'user_id' => 3,
                'district_id' => 3,
                'image' => 'anhmau.jpeg',
                'status' => 4,
            ],
        ]);
    }
}
