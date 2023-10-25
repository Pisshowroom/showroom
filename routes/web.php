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

Route::get('/semua-penjual', [BuyerController::class, 'allSeller'])->name('buyer.allSeller');
Route::get('/detail-penjual', [BuyerController::class, 'detailSeller'])->name('buyer.detailSeller');

Route::get('/semua-produk', [BuyerController::class, 'allListProduct'])->name('buyer.allListProduct');
Route::get('/semua-produk-grid', [BuyerController::class, 'allGridProduct'])->name('buyer.allGridProduct');
Route::get('/detail-produk', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');
Route::get('/wishlist', [BuyerController::class, 'wishlist'])->name('buyer.wishlist');
Route::get('/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');
Route::get('/keranjang', [BuyerController::class, 'cart'])->name('buyer.cart');


// Route::get('/detail-produk/{slug}', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');


// Route::middleware("auth:api")->group(function () {
    Route::group(['prefix' => 'pembeli'], function () {
        Route::get('/', [BuyerController::class, 'dashboard'])->name('buyer.dashboard');
});
// });
// seller
Route::get('/seller', [SellerController::class, 'home'])->name('seller.home');
