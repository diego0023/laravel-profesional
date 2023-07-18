<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */

/* Tipos de rutas
 toda ruta lleva ('ruta', Controlador), se les puede agregar un nombre ->name('');
 Route::view(); // atajo solo se usa para mostrar una ruta estatica
 Route::get();
 Route::post();
 Route::put();
 Route::delete();
 Route::patch(); */

 Route::view('/','landing.index')->name('index');
 Route::view('/about','landing.about')->name('about');

