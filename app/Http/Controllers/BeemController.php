<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;



class BeemController extends Controller
{
    //
		function index(Request $req){
			$referenceNumber = $req->input('referenceNumber');
			// $transactionID = $req->input('transactionID');

			$data = DB::table('orders')->where('referenceNumber',$referenceNumber)->update(['order_paid'=>'yes']);

			// return redirect('allorders');
		}


		function getotp(Request $req){
		  $phone = $req->admin_phone;

			$username = 'b1d2218977b5d109';
			$password = 'OTFmMWViOGQ4MDQ2YmRhN2U3YzVlZDlmZmU0NjE3MTEwYWMxZWY5MjI1YWEzYmY5NTQ3ZGFlZjRmNDllMzE0Yg==';

			$response = Http::withBasicAuth($username,$password)->post('https://apiotp.beem.africa/v1/request',[
				"appId" => 206,
				"msisdn" => $phone
			]);


			if(!isset($response['data'])){
				return redirect('admin');
			}

			$data = $response['data'];
			$pinId = $data['pinId'];

			$req->session()->put('pinId',$pinId);

			return redirect('verify');
		}


		function verifyotp(Request $req){

			$username = 'b1d2218977b5d109';
			$password = 'OTFmMWViOGQ4MDQ2YmRhN2U3YzVlZDlmZmU0NjE3MTEwYWMxZWY5MjI1YWEzYmY5NTQ3ZGFlZjRmNDllMzE0Yg==';

			$code = $req->code;
			$response = Http::withBasicAuth($username,$password)->post('https://apiotp.beem.africa/v1/verify',[
				"pinId" => session('pinId'),
				"pin" => $code
			]);

			$data = $response['data'];
			$message = $data['message'];

			if($message['code'] === 117){//valid pin
				$req->session()->put('user','admin');
					return redirect('mypanel');
			}

			return redirect('verify');//if not vallid



		}

}
