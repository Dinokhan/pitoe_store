<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Addresses extends Controller
{
	public function index()
	{
		$data = DB::table('addresses')->get();
		return response()->json([
			'addresses' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
	public function get($id)
	{
		$data = DB::table('addresses')
		->where('customer_id', $id)
		->get();
		
		return response()->json([
			'addresses' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
	public function create(Request $request)
	{
		$data = DB::table('addresses')
		->insert([
			'address_type' => 'customer',
			'customer_id' => $request->customer_id,
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'address1' => $request->address1,
			'postcode' => $request->postcode,
			'city' => $request->city,
			'state' => $request->state,
			'country' => 'ID',
			'phone' => $request->phone,
			'default_address' => 1,

		]);
		return response()->json([
			'addresses' => $data,
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
	public function delete(Request $request, $id)
	{
		$data = DB::table('products')
		->where('id', $id)
		->delete();
		return response()->json([
			'products' => 'Data Berhasil Dihapus',
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
}
