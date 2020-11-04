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
    return view('auth.login');
});

Auth::routes();
Route::group([
    'middlware' => 'auth'
], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

    //Product

    Route::get('/product', 'Admin\AdminProductController@index');
    Route::get('product/create', 'Admin\AdminProductController@create');
    Route::post('product/store', 'Admin\AdminProductController@store');
    Route::get('product/{id}/edit', 'Admin\AdminProductController@edit');
    Route::get('product/{id}', 'Admin\AdminProductController@update');
    Route::get('product/{id}/delete', 'Admin\AdminProductController@destroy');

    //Category);
    });


Route::get('customer/{id}/delete', 'Admin\CustomerController@destroy');
Route::prefix('admin')->middleware('auth')->group(function () {
    
    Route::resource('customer', 'Admin\CustomerController');

    Route::get('/settings', 'Admin\SettingController@index')->name('settings.index');
    Route::post('/settings', 'Admin\SettingController@store')->name('settings.store');

    Route::get('/cart', 'Admin\AdminCartController@index')->name('cart.index');
    Route::post('/cart', 'Admin\AdminCartController@store')->name('cart.store');
    Route::post('/cart/change-qty', 'Admin\AdminCartController@changeQty');
    Route::delete('/cart/delete', 'CartController@delete');
    Route::delete('/cart/empty', 'CartController@empty');
});