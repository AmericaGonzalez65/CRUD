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

Route::get('/user', 'PruebasController@index');
Route::post('/altauser', 'PruebasController@save');
Route::get('/nuevouser', 'PruebasController@create');
Route::get('/showuser', 'PruebaControlador@show');
Route::get('/deleteuser', 'PruebaControlador@destroy');

Route::get('/formulario', function (){
    return view ('index');
});

Route::post('/valida', 'PruebasController@validarLogin');
Route::get('/error', function (){
    return view ('error');
});

Route::get('/valido', function (){
    return view ('login');
});

