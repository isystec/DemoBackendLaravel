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
    return view('plantilla.plantilla');
});

Auth::routes();
//Rutas del Controlador
Route::resource('preinscripciones','PreinscripcionesController');

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de Preinscripciones
//Route::get('preinscripciones/ver','PreinscripcionesController@ver');
Route::get('ver','PreinscripcionesController@ver');
