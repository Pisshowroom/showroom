<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
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

// create route group user
Route::group(['prefix' => 'user'], function () {
    Route::post('/login-firebase', [AuthController::class, 'loginFirebase']);
    // create route group user with middleware auth:api-client
    Route::middleware('auth:api-client')->group(function () {
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/update-profile', [UserController::class, 'updateProfile']);
        Route::post('/logout', [UserController::class, 'logout']);
    });
});
