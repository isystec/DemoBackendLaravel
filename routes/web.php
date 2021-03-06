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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Rutas del Controlador
Route::resource('preinscripciones','PreinscripcionesController');
Route::resource('documentos','DocumentosController');
Route::resource('documentosalum','DocumentosalumController');

//Rutas de Preinscripciones
Route::get('ver/{id}','PreinscripcionesController@ver');
Route::get('prueba/{id}', 'PreinscripcionesController@prueba');

//Rutas de Documentos
Route::get('verdocumento/{id}','DocumentosController@verdocumento');
Route::get('listardocumentos/{id}','DocumentosController@listardocumentos')->name('listardoc');

//Rutas alumno
Route::get('listadodedocumentos/{id}','DocumentosalumController@iniciodocumento');



