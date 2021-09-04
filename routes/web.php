<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\infoController@index');

Route::get('/btc-idr','App\Http\Controllers\infoController@konversibtc');

Route::get('/idr-btc','App\Http\Controllers\infoController@konversiidr');


// Route::get('/btc-idr', function () {
//     return view('btc-rp');
// });

// Route::get('/idr-btc', function () {
//     return view('rp-btc');
// });
