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

Route::resource('user', 'UserController');

Route::resource('po', 'POController');

Route::get('penjualan', 'PenjualanController@index');

Route::get('pembelian', 'PembelianController@index');

Route::get('cashflow', 'CashflowController@index');

Route::get('rugilaba', 'RugiLabaController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
