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
    return view('welcome');
});


Route::get('/Candy', function () {
    return view('Candy');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/About', function () {
    $arr = array ( array("Ibrahim"=>"CEO Founder" ),array("Samar"=>"CEO Founder" ),array("Ghufran"=>"CEO Founder" ));
   
    return view('About').print_r($arr) ;
     
});