<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testCon;

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


Route::get('/Candy', [testCon::class, 'candy']);

Route::get('/Contact', [testCon::class, 'contact']);

// Route::get('/About', function () {
//     $arr = array ( array("Ibrahim"=>"CEO Founder" ),array("Samar"=>"CEO Founder" ),array("Ghufran"=>"CEO Founder" ));
   
//     return view('About',$arr).print_r($arr[0]["Ibrahim"])  ;
     
// });


// Route::get('/About', [testCon::class, 'show']);

// Route::get('/About1/id/{id}/name/{name}', [testCon::class, 'show1']);
Route::get('/About', function () {
      $arr = array ( array( "name"=>"Ibrahim","postion"=>"CEO Founder" ),array("name"=>"Samar","postion"=>"CEO Founder" ),array("name"=>"Ghufran","postion"=>"CEO Founder" ));
   
    return View::make('About')->with('arr', $arr);
});

