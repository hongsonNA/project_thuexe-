<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ModelCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'id'=> 1,
                'name'=> 'Lamboghini',
            ],
            [
                'id'=> 2,
                'name'=> 'Honda',
            ],
            [
                'id'=> 3,
                'name'=> 'Toyota',
            ],
            [
                'id'=> 4,
                'name'=> 'BWM',
            ],
        ]);
    }
}
