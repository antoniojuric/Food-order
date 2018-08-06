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
        // $this->call(UsersTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(FoodCategoryTableSeeder::class);
		$this->call(FoodTableSeeder::class);
		$this->call(OrdersTableSeeder::class);
    }
}
