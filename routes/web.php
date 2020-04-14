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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('outlets/json', 'OutletController@datatable');
Route::resource('outlets', 'OutletController');
Route::prefix('users')->group(function () {
    Route::get('pegawai/json', 'UserController@datatable');
    Route::resource('pegawai', 'UserController');
    Route::get('customers/json', 'CustomerController@datatable');
    Route::resource('customers', 'CustomerController');
    Route::get('suppliers/json', 'SupplierController@datatable');
    Route::resource('suppliers', 'SupplierController');
});
Route::prefix('inventory')->group(function () {
    Route::get('products/json', 'ProductController@datatable');
    Route::resource('products', 'ProductController');
});
