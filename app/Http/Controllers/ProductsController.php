<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Products;
use Input;
use Session;
use Redirect;

class ProductsController extends Controller
{
	public function index()
	{
		$products = Products::all();
		return view('products.index', compact('products'));
	}
	
	public function show(Products $product)
	{
		return view('products.show', compact('product'));
	}
	
	public function addCart()
	{		
		$product_id = Input::get('product_id');
		$amount = Input::get('amount');

		if ($amount <1) {
			return Redirect::route('products.index')->with('message', 'Wrong number of product!');
		}
		
		$items = Session::get("CART", []);
		if (array_key_exists($product_id, $items)) {
			$items[$product_id] += $amount;		
		} else {
			$items[$product_id] = $amount;
		}
		Session::put('CART', $items);

 		return Redirect::route('products.index')->with('message', 'Successfully added!');

	}
}
