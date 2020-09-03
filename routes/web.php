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

Route::prefix('request-for-partnership')->group( function () {
    
    Auth::routes(['register' => false]);

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::prefix('back-office')->group( function () {
    
    	Route::middleware('auth')->group( function () {
    
    		Route::get('application/export', 'ApplicationController@export')->name('application.export');
    
    		Route::get('application/{application}/attachment', 'ApplicationController@attachment')->name('application.attachment');

            Route::get('application/{application}/brand-document', 'ApplicationController@brandDocument')->name('application.brand_document');
            
            Route::get('application/api', 'ApplicationController@index')->name('application.index.api');
    
    		Route::resource('application', 'ApplicationController')->only([
    
    			'index', 'show', 'destroy'
    		]);
    
    		Route::get('account', 'AccountController@edit')->name('account');
    
    		Route::put('account/update', 'AccountController@update')->name('account.update');
    	});
    });
    
    Route::post('application/submit', 'ApplicationController@store')->name('application.store');
    
    Route::get('/', 'ApplicationController@create')->name('application.create');
});
