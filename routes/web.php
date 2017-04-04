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
Route::get('/registro-de-usuarios', 'RegistroController@index');

// POST REGISTRO
Route::post('/registro-de-usuarios', 'RegistroController@store');

// TIENDA
Route::get('/tienda-de-articulos', 'tienda\TiendaController@index');

// TIENDA DETALLES
Route::get('/getLocation', array('as' => 'getLocation', 'uses' => 'tienda\TiendaController@getDetails'));

// NAVEGAR POR CATEGORIA
Route::get('/tienda-de-articulos/categoria/{id}', 'tienda\TiendaController@getItems');

// COMPRAR EN TIENDA
Route::get('/tienda-de-articulos/{id}/comprar', 'tienda\TiendaController@buy');

// RANKING GENERAL
Route::get('/ranking-general', 'RankingController@index');

// RANKING BUSQUEDA
Route::post('/ranking-general/', 'RankingController@search');

// LOGIN
Route::post('/inicio-de-session', 'LoginController@getLogin');

// OUT LOGIN
Route::get('/cerrar-session', function () {Auth::logout();return redirect('/');});

// PANEL DE USUARIO
Route::get('/panel-de-usuario/', 'UserPanelController@index');

// PERFIL DE USUARIO
Route::get('/perfil/ver/{id}/', 'PerfilController@index');
