<?php

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'HomeController@index');
Route::get('/siteconfig', 'HomeController@siteConfig');
Route::post('/siteconfig', 'HomeController@updateSiteConfig');

Route::get('/orders', 'OrdersController@index');

Route::get('/orders/markCompleted/{order}', 'OrdersController@markCompleted');
Route::get('/orders/completed', 'OrdersController@showCompleted');
Route::delete('orders/{order}', 'OrdersController@destroy');
Route::resource('companies', 'CompaniesController');
Route::resource('products', 'ProductsController');

//Notfound
Route::get('/notfound', function () {
	return view('errors.404');
});

Route::post('/orders/process', 'OrdersController@process');


Route::get('{company}', 'CompaniesController@show');