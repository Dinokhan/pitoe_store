<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Review extends Controller
{
	public function index()
	{
		$data = DB::table('review')->get();
		return response()->json([
			'review' => $data,
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
		$data = DB::table('products')
		->insert([
			'title' => $request->title,
			'rating' => $request->rating,
			'comment' => $request->comment,
			'status' => $request->status,
			'product_id' => $request->product_id,
			'customer_id' => $request->customer_id,
		]);
		return response()->json([
			'review' => $data,
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
