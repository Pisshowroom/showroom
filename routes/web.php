<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// dummy get
Route::get('/geta', function () {
    return App\Models\RoSubdistrict::find(18)->load('ro_city.ro_province');
});

// route get, find user id 1, then laravel sanctum create token named lypsis-auth, then return the token result

Route::get('/forcing-auth/{id}', function (Request $request) {
    $user_id = $request->id;
    $user = App\Models\User::find($user_id);
    $token = $user->createToken('lypsis-auth')->plainTextToken;
    return response()->json([
        'token' => $token
    ]);
});

// Route get, authed, returnin auth()->user()\
Route::get('/authed', function () {
    // $authUser = auth()->user();
    $authUser = Auth::guard('api-client')->user();

    return $authUser;
// });
})->middleware('auth:sanctum');


Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*');
