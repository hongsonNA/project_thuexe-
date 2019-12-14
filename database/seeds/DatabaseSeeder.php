<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(ModelCarSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeedr::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
