<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([], function(){
	Route::post('/posts', 'PostController@store');
	Route::get('/posts', 'PostController@index');
	Route::get('/posts/{id}/edit', 'PostController@edit');
	Route::post('/posts/{id}/update', 'PostController@update');
	Route::delete('/posts/{id}/delete', 'PostController@destroy');

	//routes for orders
	Route::post('orders', 'OrderController@store');
	Route::get('/orders', 'OrderController@index');
	Route::get('/orders/{id}/edit', 'OrderController@edit');
	Route::post('/orders/{id}/update', 'OrderController@update');
	Route::delete('/orders/{id}/delete', 'orderController@destroy');
});
