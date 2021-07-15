<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class BeemController extends Controller
{
    //
		function index(Request $req){
			$referenceNumber = $req->input('referenceNumber');
			// $transactionID = $req->input('transactionID');

			$data = DB::table('orders')->where('referenceNumber',$referenceNumber)->update('order_paid'=>'yes');

			// return redirect('allorders');
		}

}
