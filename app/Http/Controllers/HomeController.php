<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Food;
use App\FoodCategory;
use App\Http\Requests;
use Session;
use App\Cart;
use App\User;
use App\Order;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = FoodCategory::all();
		$foods = Food::all();

        return view('home', ['categories' => $categories, 'foods' => $foods]);
    }

	public function registerView(){
		return view('registerUser');
	}

	public function registerUser(Request $request){
		$this->validate($request, ['first_name' => 'required', 'last_name' => 'required', 'address' => 'required', 'phone_number' => 'required', 'email' => 'required']);
		$password = Hash::make($request->password);
		$user = new User();
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->address = $request->address;
		$user->phone_number = $request->phone_number;
		$user->email = $request->email;
		$user->password = $password;
		$user->save();
		return redirect()->back();
	}

	public function addToCart(Request $request, $id)
	{
		$product = Food::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product, $product->id);

		$request->session()->put('cart', $cart);
		return redirect()->route('home');
	}

	public function getCart()
	{
		if(!Session::has('cart')){
			return view('shoppingCart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		$user = Auth::user();
		return view('shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'user' =>$user]);
	}

	public function postCheckout(Request $request){
		if(!Session::has('cart')){
			return view('shoppingCart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		try{
			$order = new Order();
			$order->cart = serialize($cart);
			$order->total_price = $cart->totalPrice;
			$order->address = $request->input('address');
			$order->phone_number = $request->input('phone_number');
			$order->user_id = Auth::user()->id;
			$order->save();
		}catch(\Exception $e){
			return redirect()->route('shoppingCart')->with('error', $e->getMessage());
		}
		Session::forget('cart');
		Session::save();
		return redirect()->route('alert','successPostCheckout');
	}

	public function removeItem($id){
		$cart = Session::get('cart');
		$cart->totalQty -= $cart->items[$id]['qty'];
		$cart->totalPrice -= $cart->items[$id]['price'];
        unset($cart->items[$id]);
        Session::put('cart', $cart);
        if($cart->totalQty==0){
			Session::forget('cart');
			Session::save();
		}
        return redirect()->route('shoppingCart');
	}

	public function reduceItem($id){
		$cart = Session::get('cart');
		$cart->totalQty --;
		$cart->items[$id]['qty'] --;
		$cart->totalPrice -= $cart->items[$id]['item']['price'];
		$cart->items[$id]['price'] -= $cart->items[$id]['item']['price'];
		if($cart->items[$id]['qty'] == 0){
			unset($cart->items[$id]);
		}
        Session::put('cart', $cart);
        if($cart->totalQty==0){
			Session::forget('cart');
			Session::save();
		}
        return redirect()->route('shoppingCart');
	}

	public function getUserInfo(){

		
		return view('profile', ['user' => Auth::user()]);
	}

	public function updateProfile(Request $request){
		$this->validate($request, ['first_name' => 'required|max:35', 'last_name' => 'required|max:35', 'address' => 'required|max:100', 'phone_number' => 'required|max:20', 'email' => 'required|max:45',]);
		
		Auth::user()->update([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'address' => $request->address,
			'phone_number' => $request->phone_number,
			'email' => $request->email,
		]);
		return redirect()->route('alert','successUpdateProfile');
		
	}

	public function getUserOrders(){
		$id = Auth::user()->id;

		$orders = Order::all()->where('user_id', $id)->sortByDesc('created_at');
		$orders->transform(function($order, $key){
			$order->cart = unserialize($order->cart);
			return $order;
		});
        return view('user_orders', ['orders' => $orders]);
	}
}
