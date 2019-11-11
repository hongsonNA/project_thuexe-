<?php

use Illuminate\Database\Seeder;

class PostTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicels')->insert([
            [
                'seat'=>4,
                'description'=>'A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of car say they run primarily on roads, seat one to eight people
                , have four tires, and mainly transport people rather than goods',
                'cate_id'=>4,
                'price'=>3000000,
                'model'=>'lamborghini',
                'owner'=>'hongson',
                'registration_date'=>date(),
                'status'=>4,
                'view'=>4,
                'address'=>'Ha Noi',
                'city_id'=>4,
                'district_id'=>3,


            ]
        ]);
    }
}
