<?php
use App\FoodCategory;
use Illuminate\Database\Seeder;

class FoodCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodCategory::create([
            'category_name' => 'Rostilj',
        ]);

		FoodCategory::create([
            'category_name' => 'Pizze',
        ]);

		FoodCategory::create([
            'category_name' => 'Juhe',
        ]);

		FoodCategory::create([
            'category_name' => 'Salate',
        ]);

		FoodCategory::create([
            'category_name' => 'Rizota',
        ]);

		FoodCategory::create([
            'category_name' => 'Tjestenine',
        ]);
    }
}
