<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [ 'as'=>'home', 'uses'=>'TodoListController@index']);
Route::resource('todos', 'TodoListController');
Route::resource('todos.items', 'TodoItemController', 
		['except'=>['index', 'show']]);

Route::patch('/todos/{todos}/items/{items}', 
		['as'=>'todos.items.complete', 
		'uses'=>'TodoItemController@complete']);

// Event::listen('illuminate.query', function($query) {
// 	//do something
// });		