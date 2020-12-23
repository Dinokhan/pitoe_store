<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Cookie;
use DB;

class Customers extends Controller
{
	public function index()
	{
		$data = DB::table('customers')->get();
		return response()->json([
			'customers' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
	}
	public function get($id)
	{
		$data = DB::table('customers')
		->where('id', $id)
		->get();
		if ($data) {
			return response()->json([
				'customer_data' => $data,
				'status_code'   => 200,
				'msg'           => 'success',
			], 200);
		}
	}
	public function register(Request $request)
	{
		$data = DB::table('customers')
		->insert([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'status' => 1,
			'is_verified' => 1,
			'password2' => $request->password,
			'password' => bcrypt($request->password)
		]);
		return response()->json([
			'username' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
	public function login(Request $request)
	{
		$email = $request->email;
		$pass = $request->password; 

		$data = DB::table('customers')
		->where('password2', $pass)
		->where('email', $email)
		->get();
		return response()->json([
			'username' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}

	public function edit($id)
	{
		$data = DB::table('products')
		->where('id', $id)
		->get();
		$false = DB::table('products')
		->where('id', '!=', $id)
		->get();
		if ($data) {
			return response()->json([
				'products' => $data,
				'status_code'   => 200,
				'msg'           => 'success',
			], 200);
		}
	}
	public function create(Request $request)
	{
		$image = $request->file('image');
		$new_name = rand() . '.' . $image->getClientOriginalExtension();
		$image->move(public_path('images'), $new_name);

		$data = DB::table('products')
		->insert([
			'category_id' => $request->category,
			'name' => $request->name,
			'lokasi' => $request->nama_cabang,
			'price' => $request->price,
			'purchase_price' => $request->purchase_price,
			'status' => $request->status,
			'merk' => $request->merk,
			'stock' => $request->stock,
			'satuan' => $request->satuan,
			'stock_minim' => $request->stock_minim,
			'image' => $new_name
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
