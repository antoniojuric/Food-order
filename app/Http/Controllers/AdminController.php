<?php

namespace App\Http\Controllers;

use App\Order;
use App\Food;
use App\FoodCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::all()->where('status', 'active')->sortBy('created_at');;
		$orders->transform(function($order, $key){
			$order->cart = unserialize($order->cart);
			return $order;
		});
        return view('admin', ['orders' => $orders]);
    }
	public function finishedOrders(){
		$finished_orders = Order::all()->where('status', 'finished')->sortBy('created_at');;
		$finished_orders->transform(function($order, $key){
			$order->cart = unserialize($order->cart);
			return $order;
		});
        return view('admin', ['orders' => $finished_orders]);
	}

	public function updateStatusOrder($id){
		$order = Order::find($id);
		$order->status = 'finished';
		$order->save();
		return redirect()->back();
	}

	public function getFoodCategory(){
		$categories = FoodCategory::all();

		return view('add_food', ['categories' => $categories]);
	}

	public function add_food(Request $request){

		$this->validate($request, ['name' => 'required', 'price' => 'required', 'photo' => 'required']);

		$food = new Food();
		$food->name = $request->name;
		$food->price = $request->price;
		$food->photo = $request->photo;
		$food->food_category_id = $request->food_type;
		$food->save();
		return redirect()->back();

	}

	public function getCategory(){
		return view('categoryAdd');

	}

	public function postCategory(Request $request){

		$this->validate($request, ['category_name' => 'required']);

		$category = new FoodCategory();
		$category->category_name = $request->category_name;
		$category->save();
		return redirect()->back();

	}
	

    
}
