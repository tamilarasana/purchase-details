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

Route::get('/purchase', function () {
    return view('detail');
});


// Route::get('/view', function () {
//     return view('view');
// });


Route::get('/view',  "PurchasedetailsController@index");
Route::post('/store', "PurchasedetailsController@store");
Route::get('/list', "PurchasedetailsController@list");
Route::get('/show/{id}',"PurchasedetailsController@edit");
