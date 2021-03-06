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


/**
* Home Page
*/

Route::get('/', [
	'as'=>'home',
	'uses'=>'PagesController@home'
]);



/**
* Services Page
*/
Route::get('/services', [
	'as'=>'services',
	'uses'=>'PagesController@services'
]);


/**
* Contact Page
*/
Route::get('/contact', [
	'as'=>'contact',
	'uses'=>'PagesController@contact'
]);
