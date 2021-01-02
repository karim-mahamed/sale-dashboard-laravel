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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::group(['middleware'=>'auth'],function(){

          Route::get('dashboard/index', function () {
    return view('layouts.dashboard.app');
});
//Route::get('mastr', function () {
// return view('dashboard.users.index');
//});
          Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('dashboard/users/index','UserController@index')->name('dashboard.users.index');
Route::get('dashboard/users/create','UserController@create');
Route::post('dashboard/users/index','UserController@store')->name('dashboard.users.store');
Route::get('dashboard/users/{id}/edit','UserController@edit')->name('dashboard.users.edit');
Route::post('dashboard/users/update/{id}','UserController@update')->name('dashboard.users.update');
Route::delete('dashboard/users/index/{id}','UserController@destroy')->name('dashboard.users.destroy');



Route::get('dashboard/categories/index','categorycontroller@index')->name('dashboard.categories.index');
Route::get('dashboard/categories/create','categoryController@create');
Route::post('dashboard/categories/index','categoryController@store')->name('dashboard.categories.store');

Route::get('dashboard/categories/{id}/edit','categoryController@edit')->name('dashboard.categories.edit');
Route::post('dashboard/categories/update/{id}','categoryController@update')->name('dashboard.categories.update');
Route::delete('dashboard/categories/index/{id}','categoryController@destroy')->name('dashboard.categories.destroy');


Route::get('dashboard/products/index','productcontroller@index')->name('dashboard.products.index');
Route::get('dashboard/products/create','productController@create')->name('dashboard.products.create');
Route::post('dashboard/products/index','productController@store')->name('dashboard.products.store');

Route::get('dashboard/products/{id}/edit','productController@edit')->name('dashboard.products.edit');
Route::post('dashboard/products/update/{id}','productController@update')->name('dashboard.products.update');
Route::delete('dashboard/products/index/{id}','productController@destroy')->name('dashboard.products.destroy');





Route::get('dashboard/clients/index','clientcontroller@index')->name('dashboard.clients.index');
Route::get('dashboard/clients/create','clientController@create')->name('dashboard.clients.create');
Route::post('dashboard/clients/index','clientController@store')->name('dashboard.clients.store');

Route::get('dashboard/clients/{id}/edit','clientController@edit')->name('dashboard.clients.edit');
Route::post('dashboard/clients/update/{id}','clientController@update')->name('dashboard.clients.update');
Route::delete('dashboard/clients/index/{id}','clientController@destroy')->name('dashboard.clients.destroy');



Route::get('dashboard/clients/orders/create/{id}','Client\OrderController@create')->name('dashboard.clients.orders.create');

Route::post('dashboard/clients/orders/create/{id}','Client\OrderController@store')->name('dashboard.clients.orders.store');




Route::get('dashboard/orders/index','ordercontroller@index')->name('dashboard.orders.index');
Route::get('/orders/{order}/products', 'OrderController@products')->name('orders.products');

        });//end of dashboard routes
    });

























