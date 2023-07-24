<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



/* Route::get('/no-acces', [ExampleController::class, 'noAcces'] )->name('no-acces');
Route::get('/', [ExampleController::class, 'index']); */

Route::post('/create', [AuthController::class, 'createUSer']);
Route::post('/login', [AuthController::class, 'loginUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
