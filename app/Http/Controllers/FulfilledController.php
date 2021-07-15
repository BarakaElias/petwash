<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class FulfilledController extends Controller
{
    //rmoves from database
		function mark_complete($order_id){

			$data = DB::table('orders')->where('order_id',$order_id)->delete();



			$code = $response['code'];

			return redirect('mypanel');

		}
}
