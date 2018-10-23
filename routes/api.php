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

Route::post('register','Auth\RegisterController@register');


Route::get('tables', 'TableController@index');
Route::get('tables/{table}', 'TableController@show');
Route::post('tables', 'TableController@store');
Route::put('tables/{table}', 'TableController@update');
Route::delete('tables/{table}', 'TableController@delete');

