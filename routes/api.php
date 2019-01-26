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
Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');

Route::post('/jobTypeCreate', 'JobTypeController@store');
Route::get('/jobTypeIndex', 'JobTypeController@index');
Route::get('/Show/{id}', 'JobTypeController@show');

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'Api\AuthController@logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
