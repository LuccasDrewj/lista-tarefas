<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', 'App\Http\Controllers\UserController@indexApi');
Route::post('/user', 'App\Http\Controllers\UserController@storeApi');
Route::delete('/user/{id}','App\Http\Controllers\UserController@destroyApi');
Route::put('/contato/{id}','App\Http\Controllers\UserController@updateApi');


