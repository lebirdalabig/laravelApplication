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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('task', 'TaskController', array('only' => array('index', 'store', 'show', 'update', 'destroy')));
// Route::resource('test', 'TestController');

Route::get('store', 'TestController@store');
Route::get('index', 'TestController@index');
Route::get('create', 'TestController@create');
Route::post('destroy', 'TestController@destroy');