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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/produto', 'App\http\Controllers\ProdutoController@index');
Route::get('/categoria', 'App\http\Controllers\CategoriaController@index');
Route::get('/contato', 'App\http\Controllers\ContatoController@index');

