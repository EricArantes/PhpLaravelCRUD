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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario/novo', 'UsuariosController@create')->name('novo_cadastro');
Route::post('/usuario/novo', 'UsuariosController@store')->name('salvar_usuario');
Route::get('/usuarios/ver', 'UsuariosController@show')->name('mostrar_usuarios');
Route::get('/usuario/del/{id}', 'UsuariosController@destroy')->name('excluir_usuario');
Route::get('/usuario/edit/{id}', 'UsuariosController@edit')->name('editar_usuario');
Route::post('/usuario/edit/{id}', 'UsuariosController@update')->name('atualizar_usuario');
Route::get('/usuario/json/{id}', 'UsuariosController@returnJson')->name('retornar_json');
