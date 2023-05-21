<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiseaseController;
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

Route::post('/login',[AuthenticationController::class, 'login']);
Route::get('/authenticated',[AuthenticationController::class, 'authenticated'])->middleware('auth:sanctum');
Route::get('/logout',[AuthenticationController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/posts',[PostController::class, 'index'])->middleware('auth:sanctum');
Route::get('/posts/{id}',[PostController::class, 'show'])->middleware('auth:sanctum');

Route::get('/users',[UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);

Route::get('/diseases',[DiseaseController::class, 'index']);
Route::get('/diseases/{id}',[DiseaseController::class, 'show']);