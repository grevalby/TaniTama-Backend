<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/authenticated',[AuthenticationController::class, 'authenticated']);
    Route::get('/logout',[AuthenticationController::class, 'logout']);
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/users/{id}',[UserController::class, 'show']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::patch('/posts/{id}', [PostController::class, 'update'])->middleware('PostAuthor');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('PostAuthor');

    Route::post('/posts/{id}/comment', [CommentController::class, 'store']);
    Route::patch('/comment/{id}', [CommentController::class, 'update'])->middleware('CommentAuthor');
    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->middleware('CommentAuthor');
});

Route::post('/login',[AuthenticationController::class, 'login']);

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{id}',[PostController::class, 'show']);

Route::get('/diseases',[DiseaseController::class, 'index']);
Route::get('/diseases/{id}',[DiseaseController::class, 'show']);