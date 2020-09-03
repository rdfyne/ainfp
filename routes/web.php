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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('back-office')->group( function () {

	Route::middleware('auth')->group( function () {

		Route::get('application/export', 'ApplicationController@export')->name('application.export');

		Route::get('application/{application}/invoice', 'ApplicationController@invoice')->name('application.invoice');

		Route::resource('application', 'ApplicationController')->only([

			'index', 'show', 'destroy'
		]);

		Route::get('account', 'AccountController@edit')->name('account');

		Route::put('account/update', 'AccountController@update')->name('account.update');
	});
});

Route::get('request-for-partnership', 'ApplicationController@create')->name('application.create');

Route::post('application/store', 'ApplicationController@store')->name('application.store');
