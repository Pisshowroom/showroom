<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Clients\BuyerController;
use App\Http\Controllers\Clients\SellerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin{any}', [AppController::class, 'index'])->where('any', '.*');

// buyer
Route::get('/', [BuyerController::class, 'home'])->name('buyer.home');
Route::get('/masuk', [BuyerController::class, 'login'])->name('buyer.login');
Route::get('/mendaftar', [BuyerController::class, 'register'])->name('buyer.register');
Route::get('/tidak-ditemukan', [BuyerController::class, 'notFound'])->name('buyer.notFound');
Route::get('/kontak-kami', [BuyerController::class, 'contact'])->name('buyer.contact');
Route::get('/tentang-kami', [BuyerController::class, 'about'])->name('buyer.about');
Route::get('/syarat-dan-ketentuan', [BuyerController::class, 'term'])->name('buyer.term');

// seller
Route::get('/seller', [SellerController::class, 'home'])->name('seller.home');
