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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('outlets/json', 'OutletController@datatable');
Route::resource('outlets', 'OutletController', [
    'except' => ['edit', 'create']
]);
Route::prefix('users')->group(function () {
    Route::get('pegawai/json', 'UserController@datatable');
    Route::resource('pegawai', 'UserController', [
        'except' => ['edit', 'create']
    ]);
    Route::get('customers/json', 'CustomerController@datatable');
    Route::resource('customers', 'CustomerController', [
        'except' => ['edit', 'create']
    ]);
    Route::get('suppliers/json', 'SupplierController@datatable');
    Route::resource('suppliers', 'SupplierController', [
        'except' => ['edit', 'create']
    ]);
});
Route::prefix('inventory')->group(function () {
    Route::get('categories/json', 'CategoryController@datatable');
    Route::resource('categories', 'CategoryController', [
        'except' => ['edit', 'create']
    ]);
    Route::get('products/json', 'ProductController@datatable');
    Route::resource('products', 'ProductController', [
        'except' => ['edit', 'create']
    ]);
    Route::get('in/json', 'InventoryController@datatable_produk_in');
    Route::get('in', 'InventoryController@index_in')->name('in.index');
    Route::resource('in', 'InventoryController', [
        'except' => ['index','edit', 'create']
    ]);
    Route::get('out/json', 'InventoryController@datatable_produk_out');
    Route::get('out', 'InventoryController@index_out')->name('out.index');
    Route::resource('out', 'InventoryController', [
        'except' => ['index', 'edit', 'create']
    ]);
});
