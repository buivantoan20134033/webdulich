<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('add',function(){
	return view('admin.product.add');
});
Route::get('list',function(){
	return view('admin.product.list');
});
Route::get('edit',function(){
	return view('admin.product.edit');
});
Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'product'], function(){
		Route::get('add',['as'=>'admin.product.getAdd', 'uses'=>'CateController@getAdd']);
	});
});
