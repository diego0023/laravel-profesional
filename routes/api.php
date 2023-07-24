<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::resource('/post', PostController::class);
Route::get('/user', function(Request $request){
    return new UserResource(User::find(1));
}); */


Route::get('/no-acces', [ExampleController::class, 'noAcces'] )->name('no-acces');



Route::middleware(['example', 'admin', 'auth'])->group(function(){
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index'])->withoutMiddleware('admin');
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index']);
});
