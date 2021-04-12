<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use \App\Http\Controllers\PostsController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/users', [UsersController::class, "index"]);
Route::post('/users', [UsersController::class, "store"]);
Route::post('/users/{user}', [UsersController::class, "update"]);
Route::delete('/users/{user}', [UsersController::class, "remove"]);

Route::get('/posts', [PostsController::class, "index"]);
Route::post('/posts', [PostsController::class, "store"]);
Route::post('/posts/{post}', [PostsController::class, "update"]);
Route::delete('/posts/{post}', [PostsController::class, "remove"]);
