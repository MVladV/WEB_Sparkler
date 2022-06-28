<?php

use Illuminate\Support\Facades\Route;

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
    return view('sparkler');
});

Route::get('/sparkler', function () {
    return view('sparkler');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/clients', function(){
    DB::table('clients')->insert([
      ['name' => 'Віталій','surname' => 'Колос','email' => 'sup4332@ukr.net','order_num' => '732209564', 'furniture_id' => '2'],
    ]);
});