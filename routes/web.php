<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

/*  Route::view('/','landing.index')->name('index');
 Route::view('/about','landing.about')->name('about'); */

 /* Route::view('/','index')->name('index');
 Route::view('/about','about')->name('about');
 Route::view('/services','services')->name('services');
 Route::view('/contact','contact')->name('contact'); */

/* Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create',[UserController::class, 'create'] )->name('user.create');
 */
/*
 Route::get('/note', [NoteController::class, 'index'])->name('note.index');
 Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
 Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
 Route::get('/note/edit/{note}',  [NoteController::class, 'edit'])->name('note.edit');
 Route::put('/note/update/{note}',  [NoteController::class, 'update'])->name('note.update');
 Route::get('/note/show/{note}',  [NoteController::class, 'show'])->name('note.show');
 Route::delete('/note/destroy/{note}',[NoteController::class, 'destroy'])->name('note.destroy'); */

 /* Route::resource('/post',PostController::class); */
/*  Route::get('/', [UserController::class, 'index'])->name('index'); */

Route::get('/', [MailController::class, 'index'])->name('index');
Route::get('/mailme', [MailController::class, 'mailMe'])->name('mailme');


