<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'showUser']);
    Route::put('/', [UserController::class, 'updateUser']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::prefix('product')->group(function(){
    Route::get('/', [ProductController::class, 'showProducts']);
    Route::post('/', [ProductController::class, 'createProduct']);
    Route::put('/', [ProductController::class, 'updateProduct']);
    Route::get('{id}', [ProductController::class, 'showSpecificProduct']);
    Route::get('tags/', [ProductController::class, 'showSpecificProductTags']);
    Route::delete('{id}', [ProductController::class, 'deleteProduct']);
    Route::put('/tags', [ProductController::class, 'updateProductTags']);
});

Route::middleware('auth:sanctum')->prefix('tag')->group(function(){
    Route::get('/', [TagController::class, 'showTags']);
    Route::post('/', [TagController::class, 'createTag']);
    Route::put('{id}', [TagController::class, 'updateTag']);
    Route::get('{id}', [TagController::class, 'showSpecificTag']);
    Route::delete('{id}', [TagController::class, 'deleteTag']);
});