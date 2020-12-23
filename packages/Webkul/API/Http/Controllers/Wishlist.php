<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Wishlist extends Controller
{
	public function index()
	{
		$data = DB::table('wishlist')
		->join('product_images', function($join){
			$join->on('wishlist.product_id', '=', 'product_images.product_id');
		})
		->groupBy('product_images.product_id')
		->get();
		return response()->json([
			'wishlist' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
	public function get($id)
	{
		$data = DB::table('wishlist')
		->where('customer_id', $id)
		->get();
		return response()->json([
			'wishlist' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
	public function create(Request $request)
	{
		$channel_id = $request->channel_id;
		$product_id = $request->product_id;
		$customer_id = $request->customer_id;

		$wish = DB::table('wishlist')
		->where('product_id', '=', $product_id)
		->where('customer_id', '=', $customer_id)
		->delete();

		$wisha = DB::table('wishlist')
		->insert([
			'channel_id' => $request->channel_id,
			'product_id' => $request->product_id,
			'customer_id' => $request->customer_id,
		]);

		return response()->json([
			'Replaced' => $wish,
			'Data' => $wisha,
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
		DB::table('wishlist')
		->where('product_id', '=', $product_id)
		->where('customer_id', '=', $customer_id)
		->delete();

		return response()->json([
			'products' => 'Data Berhasil Dihapus',
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
}
