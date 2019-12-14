<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'name'=>'Nam từ liêm',
                'city_id'=>1,
            ],
            [
                'name'=>'Quận Cầu Giấy',
                'city_id'=>1,
            ],
            [
                'name'=>'Đông Anh',
                'city_id'=>1,
            ],
            [
                'name'=>'Thạch thất',
                'city_id'=>1,
            ],
            [
                'name'=>'Thạch thất',
                'city_id'=>1,
            ],


            ]);
    }
}
