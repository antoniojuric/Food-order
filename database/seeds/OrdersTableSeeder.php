<?php
use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
			'total_price' => 25,
			'address' => 'vukovarska',
			'user_id' => 2,
        ]);
    }
}
