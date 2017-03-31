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

// INDEX
Route::get('/', 'WelcomeController@index');

// REGISTRO
Route::get('/registro-de-usuarios', function () {return view('registro');});

// POST REGISTRO
Route::post('/registro-de-usuarios', 'RegistroController@store');

// TIENDA
Route::get('/tienda-de-articulos', 'tienda\TiendaController@index');

// NAVEGAR POR CATEGORIA
Route::get('/tienda-de-articulos/categoria/{id}', 'tienda\TiendaController@getItems');

// COMPRAR EN TIENDA
Route::get('/tienda-de-articulos/{id}/comprar', 'tienda\TiendaController@buy');

// LOGIN
Route::post('/inicio-de-session', 'LoginController@getLogin');

// OUT LOGIN
Route::get('/cerrar-session', function () {Auth::logout();return redirect('/');});
