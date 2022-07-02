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

Route::get('/', 'ListarTabelas@novoformulario')->name('index');
Route::view('/login', 'login')->name('login');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::get('/envios', 'ListarTabelas@listarformularios')->name('envios');