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
Route::view('/home','welcome');

Route::get('/mypanel',[listOrderController::class, 'show']);

Route::post('/submitbook',[SubmitBookController::class, 'submit']);
Route::view('/booksuccess','success');

Route::post('/callback',[BeemController::class]);
Route::get('complete/{id}',[FulfilledController::class,'mark_complete']);
