<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use \App\Http\Controllers\PostsController;
use App\Http\Controllers\ComentariosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:api'])->group(function() {
    Route::get('/users', [UsersController::class, "index"]);
    Route::post('/users/{user}', [UsersController::class, "update"]);
    Route::delete('/users/{user}', [UsersController::class, "remove"]);

    Route::get('/posts', [PostsController::class, "index"]);
    Route::post('/posts', [PostsController::class, "store"]);
    Route::post('/posts/{post}', [PostsController::class, "update"]);
    Route::delete('/posts/{post}', [PostsController::class, "remove"]);

    Route::get('/comentarios', [ComentariosController::class, "index"]);
    Route::post('/comentarios', [ComentariosController::class, "store"]);
    Route::post('/comentarios/{comentario}', [ComentariosController::class, "update"]);
    Route::delete('/comentarios/{comentario}', [ComentariosController::class, "remove"]);
});
Route::post('/users', [UsersController::class, "store"]);



