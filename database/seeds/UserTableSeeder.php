<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Supper ADMIN',
                'email'=>'superadmin@gmail.com',
                'image' => 'default_avata.png',
                'password' => bcrypt(123456789),
                'role' => 10,
            ],
            [
                'id' => 2,
                'name' => 'ADMIN',
                'email'=>'admin@gmail.com',
                'image' => 'default_avata.png',
                'password' => bcrypt(123456789),
                'role' => 9,
            ],
            [
                'id' => 3,
                'name' => 'Member',
                'email'=>'member@gmail.com',
                'image' => 'default_avata.png',
                'password' => bcrypt(123456789),
                'role' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Guest',
                'email'=>'guest@gmail.com',
                'image' => 'default_avata.png',
                'password' => bcrypt(123456789),
                'role' => 1,
            ],
            [
                'id' => 5,
                'name' => 'User',
                'email'=>'user@gmail.com',
                'image' => 'default_avata.png',
                'password' => bcrypt(123456789),
                'role' => 1,
            ],
        ]);
    }
}
