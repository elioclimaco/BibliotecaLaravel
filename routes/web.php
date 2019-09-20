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

// Ruta original
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/* Ruta con nombre
Route::get('/', function($nombre){
    return $nombre;
})->where('nombre', '[0-9]+')->name('permiso');
*/

Route::get('/', 'InicioController@index');

Route::get('/foo', function (){
    return 'Hola mundo';
});
