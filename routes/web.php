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

/*Route::get('/tarefa', [TarefaController::class, 'index']);*/
Route::get('/users', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'viewLogin']);
Route::get('/home', [UserController::class, 'index']);
Route::get('/homeTarefas', [TarefaController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/deslogar', [UserController::class, 'deslogar']);
Route::get('/perfil', [UserController::class, 'homePerfil']);

Route::get('/cadastrar', 'App\Http\Controllers\UserController@create');
Route::post('/enviarCadastro', 'App\Http\Controllers\UserController@store');

Route::get('/criarTarefa', 'App\Http\Controllers\TarefaController@create');
Route::post('/enviarTarefa', 'App\Http\Controllers\TarefaController@store');

Route::get('/exibirJsonUser', 'App\Http\Controllers\UserController@exibirJson');