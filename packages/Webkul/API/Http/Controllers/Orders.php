<?php

namespace Webkul\API\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Orders extends Controller
{
	public function index()
	{
		$data = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->select(
			'orders.increment_id', 
			'orders.status', 
			'orders.is_guest',
			'orders.customer_email',
			'orders.customer_first_name',
			'orders.customer_last_name',
			'orders.customer_company_name',
			'orders.customer_vat_id',
			'orders.shipping_method',
			'orders.shipping_title',
			'orders.shipping_description',
			'orders.is_gift',
			'orders.total_item_count',
			'orders.total_qty_ordered',
			'orders.base_currency_code',
			'orders.channel_currency_code',
			'orders.order_currency_code',
			'orders.grand_total',
			'orders.base_grand_total',
			'orders.grand_total_invoiced',
			'orders.base_grand_total_invoiced',
			'orders.base_grand_total_refunded',
			'orders.sub_total',
			'orders.base_sub_total',
			'orders.sub_total_invoiced',
			'orders.base_sub_total_invoiced',
			'orders.sub_total_refunded',
			'orders.base_sub_total_refunded',
			'orders.discount_percent',
			'orders.discount_amount',
			'orders.base_discount_amount',
			'orders.discount_invoiced',
			'orders.base_discount_invoiced',
			'orders.discount_refunded',
			'orders.base_discount_refunded',
			'orders.tax_amount',
			'orders.base_tax_amount',
			'orders.tax_amount_invoiced',
			'orders.tax_amount_refunded',
			'orders.shipping_amount',
			'orders.base_shipping_amount',
			'orders.base_shipping_invoiced',
			'orders.shipping_refunded',
			'orders.base_shipping_refunded',
			'orders.customer_id',
			'orders.channel_id',
			'orders.cart_id',
		)
		->get();
		$data2 = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->select(
			'shipments.status',
			'shipments.total_qty',
			'shipments.total_weight',
			'shipments.carrier_code',
			'shipments.track_number',
			'shipments.email_sent',
			'shipments.customer_id',
			'shipments.order_id',
			'shipments.order_address_id',
			'shipments.inventory_source_id',
			'shipments.inventory_source_name',
		)
		->get();
		$data3 = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->select(
			'invoices.increment_id',
			'invoices.state',
			'invoices.email_sent',
			'invoices.total_qty',
			'invoices.base_currency_code',
			'invoices.channel_currency_code',
			'invoices.order_currency_code',
			'invoices.sub_total',
			'invoices.base_sub_total',
			'invoices.grand_total',
			'invoices.base_grand_total',
			'invoices.base_shipping_amount',
			'invoices.tax_amount',
			'invoices.base_tax_amount',
			'invoices.discount_amount',
			'invoices.base_discount_amount',
			'invoices.order_id',
			'invoices.order_address_id',
			'invoices.transaction_id',
		)
		->get();
		return response()->json([
			'orders' => $data,
			'shipments' => $data2,
			'invoices' => $data3,
			'status_code'   => 200,
			'msg'           => 'success',
		], 200);

	}
	public function get($id)
	{
		$data = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->where('orders.customer_id', $id)
		->select(
			'orders.increment_id', 
			'orders.status', 
			'orders.is_guest',
			'orders.customer_email',
			'orders.customer_first_name',
			'orders.customer_last_name',
			'orders.customer_company_name',
			'orders.customer_vat_id',
			'orders.shipping_method',
			'orders.shipping_title',
			'orders.shipping_description',
			'orders.is_gift',
			'orders.total_item_count',
			'orders.total_qty_ordered',
			'orders.base_currency_code',
			'orders.channel_currency_code',
			'orders.order_currency_code',
			'orders.grand_total',
			'orders.base_grand_total',
			'orders.grand_total_invoiced',
			'orders.base_grand_total_invoiced',
			'orders.base_grand_total_refunded',
			'orders.sub_total',
			'orders.base_sub_total',
			'orders.sub_total_invoiced',
			'orders.base_sub_total_invoiced',
			'orders.sub_total_refunded',
			'orders.base_sub_total_refunded',
			'orders.discount_percent',
			'orders.discount_amount',
			'orders.base_discount_amount',
			'orders.discount_invoiced',
			'orders.base_discount_invoiced',
			'orders.discount_refunded',
			'orders.base_discount_refunded',
			'orders.tax_amount',
			'orders.base_tax_amount',
			'orders.tax_amount_invoiced',
			'orders.tax_amount_refunded',
			'orders.shipping_amount',
			'orders.base_shipping_amount',
			'orders.base_shipping_invoiced',
			'orders.shipping_refunded',
			'orders.base_shipping_refunded',
			'orders.customer_id',
			'orders.channel_id',
			'orders.cart_id',
		)
		->get();
		$data2 = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->where('orders.customer_id', $id)
		->select(
			'shipments.status',
			'shipments.total_qty',
			'shipments.total_weight',
			'shipments.carrier_code',
			'shipments.track_number',
			'shipments.email_sent',
			'shipments.customer_id',
			'shipments.order_id',
			'shipments.order_address_id',
			'shipments.inventory_source_id',
			'shipments.inventory_source_name',
		)
		->get();
		$data3 = DB::table('orders')
		->join('shipments', function($join){
			$join->on('orders.id', '=', 'shipments.order_id')
			->on('orders.customer_id', '=', 'shipments.customer_id');
		})
		->join('invoices', function($join){
			$join->on('orders.id', '=', 'invoices.order_id');
		})
		->where('orders.customer_id', $id)
		->select(
			'invoices.increment_id',
			'invoices.state',
			'invoices.email_sent',
			'invoices.total_qty',
			'invoices.base_currency_code',
			'invoices.channel_currency_code',
			'invoices.order_currency_code',
			'invoices.sub_total',
			'invoices.base_sub_total',
			'invoices.grand_total',
			'invoices.base_grand_total',
			'invoices.base_shipping_amount',
			'invoices.tax_amount',
			'invoices.base_tax_amount',
			'invoices.discount_amount',
			'invoices.base_discount_amount',
			'invoices.order_id',
			'invoices.order_address_id',
			'invoices.transaction_id',
		)
		->get();
		return response()->json([
			'orders' => $data,
			'shipments' => $data2,
			'invoices' => $data3,
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
