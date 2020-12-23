<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Cart extends Controller
{
	public function index()
	{
		$data = DB::table('cart')
		->join('cart_items', function($join){
			$join->on('cart.id', '=', 'cart_items.cart_id');
		})
		->join('product_images', function($join){
			$join->on('cart_items.product_id', '=', 'product_images.product_id');
		})
		->orderBy('product_images.product_id')
		->get();
		return response()->json([
			'cart' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
	public function get($id)
	{
		$data = DB::table('cart')
		->join('cart_items', function($join){
			$join->on('cart.id', '=', 'cart_items.cart_id');
		})
		->where('customer_id', $id)
		->get();
		return response()->json([
			'cart' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
	public function create(Request $request)
	{
		$customer_id = $request->customer_id;
		$is_gift = $request->is_gift;
		$channel_id = $request->channel_id;
		$quantity = $request->quantity;
		$price = $request->price;
		$product_id = $request->product_id;

		$data = DB::table('cart')
		->insert([
			'customer_id' => $request->customer_id,
			'is_gift' => $request->is_gift,
			'channel_id' => $request->channel_id
		]);
		$id = DB::getPdo()->lastInsertId();
		$total = $quantity * $price;
		DB::table('cart_items')
		->insert([
			'cart_id' => $id,
			'total' => $total,
			'quantity' => $request->quantity,
			'price' => $request->price,
			'product_id' => $request->product_id
		]);

		return response()->json([
			'products' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 201);
	}
	public function update(Request $request, $id)
	{
		$data = DB::table('products')
		->where('id', $id)
		->update($request->all());
		if (is_null($data)) {
			return response()->json('data tidak ada', 404);
		}else{
			return response()->json([
				'products' => $data,
				'status_code'   => 200,
				'msg'           => 'success',
			], 200);
		}
	}
	public function delete(Request $request)
	{
		$product_id = $request->product_id;
		$customer_id = $request->customer_id;


		DB::table('cart')
		->join('cart_items', function($join){
			$join->on('cart.id', '=', 'cart_items.cart_id');
		})
		->where('cart.customer_id', '=', $customer_id)
		->where('cart_items.product_id', '=', $product_id)
		->delete();

		return response()->json([
			'products' => 'Data Berhasil Dihapus',
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
}
