<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Http;


class SubmitBookController extends Controller
{


    //
		function submit(Request $req){
			$username = 'ecdc900c850aab57';
			$password = 'OTA4OTY4OWJhNDU0OWY4ODFhNjMwMDg4MzQzNWU3MDQwNDEyNDBlODNlNGFlYzY3MmMyOTJiMWIzNzNkN2RiNA==';
			$no = rand(10000,99999);
			$sno = strval($no);
			$referenceno = 'BWP-'.$sno;

				//96f9cc09-afa0-40cf-928a-d7e2b27b2408
			// $uid1 = strval(rand(1001,9999));
			// $uid2 = strval(rand(1001,9999));
			//
			$rep = Http::get('https://www.uuidtools.com/api/generate/v1');
			$body = $rep->json();
			$uuid = $body[0];

					$myorder = new Order;
					$myorder->owner_name = $req->owner_name;
					$myorder->pet = $req->pettype;
					$myorder->order_date = $req->book_date;
					$myorder->owner_email = $req->owner_email;
					$myorder->owner_phone = $req->phone_number;
					$myorder->owner_note = $req->owner_note;
					$myorder->order_paid = "no";
					$myorder->transactionID = $uuid;
					$myorder->referenceNumber = $referenceno;
					$myorder->save();

					$amount = '10000';

					if($req->pettype === 'dog'){
							$amount = '20000';
					}


					//beem api
					$response = Http::withBasicAuth($username,$password)->get('https://checkout.beem.africa/v1/checkout',[
						'amount' => $amount,
						'transaction_id' => $uuid,
						'reference_number' => $referenceno,
						'mobile'=>$req->phone_number,
						'sendSource' => 'true'
					]);


					if(isset($response['src'])){
						return redirect($response['src']);
					}

						return redirect('booksuccess');



		}
}
