<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;

class listOrderController extends Controller
{
    //
		function show(){
			$all_orders = Order::all();
			return view('allorders',['orders'=>$all_orders]);
		}
}
