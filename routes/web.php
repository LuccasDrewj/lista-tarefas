<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    
});

Route::get('/tarefa', [TarefaController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

route::get('/cadastrar', 'App\Http\Controllers\UserController@create');
route::post('/enviarCadastro', 'App\Http\Controllers\UserController@store');