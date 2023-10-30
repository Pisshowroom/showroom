<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("home", [HomeController::class, 'home']);

Route::group(['prefix' => 'article'], function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'products']);
    Route::get('/{product}', [ProductController::class, 'show']);
});

Route::group(['prefix' => 'order'], function () {
    Route::post('/precheck', [OrderController::class, 'preCheck']);
    Route::get('/{product}', [ProductController::class, 'show']);
});
