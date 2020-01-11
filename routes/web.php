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

Route::get('/', function () {
    return view('welcome');
});
Route::get('clientes', 'ClienteController@index');
Route::get('clientes/create', 'ClienteController@create'); // isso é o metodo 
Route::post('clientes/create', 'ClienteController@store');
Route::get('clientes/edit/{id}', 'ClienteController@edit');
Route::put('clientes/edit/{id}', 'ClienteController@update');
Route::delete('clientes/{id}', 'ClienteController@destroy');