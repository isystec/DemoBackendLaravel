<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api', '')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/paises','PaisesController@APIListPaises');
Route::post('/save/preapoderado','ApisController@APISavePreApoderado');
Route::post('/save/prealumno','ApisController@APISavePreAlumno');
Route::get('/get/datos-dni','ApisController@APIGetDataDni');
Route::post('/valid/identificacion/preapoderado','ApisController@APIExistIdentificacionPreApoderado');
Route::post('/valid/identificacion/prealumno','ApisController@APIExistIdentificacionPreAlumno');




