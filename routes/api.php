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

// Route::middleware('auth:api')->get('/tasks', function (Request $request) {
//     return print_r("test");
// });

Route::get('/', 'TestController@index')->name('test.index');

Route::post('/', 'TestController@store')->name('test.store');

Route::get('/tasks/{task}', 'TestController@show')->name('test.show');

Route::put('/tasks/{task}', 'TestController@update')->name('test.update');

Route::delete('/tasks/{task}', 'TestController@destory')->name('test.destroy');