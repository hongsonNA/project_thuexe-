<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citys')->insert([

            ['name'=>'Hà Nội',],
            ['name'=>'Thái Nguyên',],
            ['name'=>'Bà Rịa'],
            ['name'=>'Bạc Liêu'],
            ['name'=>'Bảo Lộc '],
            ['name'=>'Bắc Giang '],
            ['name'=>'Bắc Kạn '],
            ['name'=>'Bắc Ninh '],
            ['name'=>'Bến Tre'],
            ['name'=>'Biên Hòa '],
            ['name'=>'Buôn Ma Thuột '],
            ['name'=>'Cà Mau '],
            ['name'=>'Cao Bằng '],
            ['name'=>'Hồ Chí Minh '],
            ['name'=>'Cẩm Phả '],
            ['name'=>'Cam Ranh '],


            ]);
    }
}
