<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

//TO HANDLE MARK COMPLETE ORDER
class FulfilledController extends Controller
{

		function mark_complete($order_id){

								$data = DB::table('orders')->where('order_id',$order_id)->first();

								$username = '3f995b9eff643b85';
								$password = 'MzVlNGEyMWFjZjE4ZmM3NGQ3ODg0YzdhZjJlZDAyZTVhOWQ1NjAyMjBkNTZiNmNmMDE1OTg4NGVhZjI1NWIyZA==';

								$rec_id = rand(10000,99999);
								$id = strval($rec_id);

								$response = Http::withBasicAuth($username,$password)->post('https://apisms.beem.africa/v1/send',[
									"source_addr" => "INFO",
									"schedule_time" => "",
									"encoding" => "0",
									"message"=>"Hello from Petwash, Your pet is well groomed. Thank you for choosing us.",
									"recipients"=>[array("recipient_id"=>$id,"dest_addr"=>$data->owner_phone)]
								]);

								if($response['code'] === 100){
									$data = DB::table('orders')->where('order_id',$order_id)->delete();
								}



								return redirect('mypanel');//mypanel is orders view

		}
}
