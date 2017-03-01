<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;

class CartController extends Controller
{
	public function index()
	{
		$items = Session::get("CART", []);
		return view('cart.index',compact('items'));
	}
	
	public function emptyCart() 
	{
		Session::pull('CART');
		return Redirect::route('cart.index')->with('message', 'Successfully cleared!');
	}
}
