<?php

Route::group(['prefix' => 'api'], function ($router) {

	Route::group(['namespace' => 'Webkul\API\Http\Controllers'], function ($router) {

		//base customer
		Route::get('customers', 'Customers@index');
		Route::post('login', 'Customers@login');
		Route::post('register', 'Customers@register');
		Route::get('customers/{id}', 'Customers@get');

        //base products
		Route::get('products', 'Products@index');
		Route::get('products/{id}', 'Products@get');

        //base products
		Route::get('categories', 'Categories@index');
		Route::get('categories/{id}', 'Categories@get');

		// base address customer
		Route::get('addresses', 'Addresses@index');
		Route::post('addresses/create', 'Addresses@create');
		Route::get('addresses/{id}', 'Addresses@get');

		// base address wishlist
		Route::get('wishlist', 'Wishlist@index');
		Route::get('wishlist/{id}', 'Wishlist@get');
		Route::post('wishlist/create', 'Wishlist@create');
		Route::post('wishlist/delete', 'Wishlist@delete');

		// base address cart
		Route::post('review/create', 'Review@create');

		// base address cart
		Route::get('cart', 'Cart@index');
		Route::get('cart/{id}', 'Cart@get');
		Route::post('cart/create', 'Cart@create');
		Route::post('cart/delete', 'Cart@delete');
		
		// base address order
		Route::get('orders', 'Orders@index');
		Route::get('orders/{id}', 'Orders@get');

		// base address inovices
		Route::get('invoices', 'Invoices@index');
		Route::get('invoices/{id}', 'Invoices@get');

		// base address shipments
		Route::get('shipments', 'Shipments@index');
		Route::get('shipments/{id}', 'Shipments@get');
		
	});
});