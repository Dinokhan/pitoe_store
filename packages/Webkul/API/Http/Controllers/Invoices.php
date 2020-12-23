<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Invoices extends Controller
{
	public function index()
	{
		$data = DB::table('invoices')->get();
		return response()->json([
			'invoices' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
	public function get($id)
	{
		$data = DB::table('invoices')
		->where('id', $id)
		->get();
		return response()->json([
			'invoices' => $data,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);
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
