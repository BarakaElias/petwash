<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmitBookController;
use App\Http\Controllers\listOrderController;
use App\Http\Controllers\BeemController;
use App\Http\Controllers\FulfilledController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//redirect to homepage
Route::view('/home','welcome');

//goes to the panel where you can view all orders
Route::get('/mypanel',[listOrderController::class, 'show'])->middleware('protectedPage');

//submits the booking order
Route::post('/submitbook',[SubmitBookController::class, 'submit']);
Route::view('/booksuccess','success');

//to receive callbacks
Route::post('/callback',[BeemController::class]);

//for marking completed orders
Route::get('complete/{id}',[FulfilledController::class,'mark_complete']);


//admin login
Route::view('/admin','admin');


//route to request otp
Route::post('requestotp',[BeemController::class,'getotp']);


//route to insert pincode view
Route::view('verify','verify');

//route to verify pincode
Route::post('verifyotp',[BeemController::class, 'verifyotp']);

//for logout
Route::get('logout',function(){
	if(session()->has('user')){
		session()->pull('user');
	}
	return redirect('home');
});
