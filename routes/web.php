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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Segundo parametro: nome_do_controller@nome_do_metodo
Route::get('/', 'HomeController@home');

//Route::get('/home', 'HomeController@teste');

//{id} expressao 
//Route::get('/home/{id}', 'HomeController@teste');

Route::post('/', 'HomeController@add');
Route::get('/delete/{id}', 'HomeController@del');
Route::get('/contato', 'HomeController@contato');