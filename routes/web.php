<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Clients\BuyerController;
use App\Http\Controllers\Clients\DashboardController;
use App\Http\Controllers\Clients\SellerController;
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


// Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*');
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


Route::get('/semua-artikel', [BuyerController::class, 'allArticle'])->name('buyer.allArticle');
Route::get('/detail-artikel', [BuyerController::class, 'detailArticle'])->name('buyer.detailArticle');

Route::get('/semua-produk', [BuyerController::class, 'allListProduct'])->name('buyer.allListProduct');
Route::get('/semua-produk-grid', [BuyerController::class, 'allGridProduct'])->name('buyer.allGridProduct');
Route::get('/detail-produk', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');
Route::get('/wishlist', [BuyerController::class, 'wishlist'])->name('buyer.wishlist');
Route::get('/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');
Route::get('/keranjang', [BuyerController::class, 'cart'])->name('buyer.cart');


// Route::get('/detail-produk/{slug}', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');


// Route::middleware("auth:api")->group(function () {
Route::group(['prefix' => 'pembeli'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
    Route::get('/pesananku', [DashboardController::class, 'myOrder'])->name('dashboard.myOrder');
    Route::get('/detail-pesanan', [DashboardController::class, 'detailOrder'])->name('dashboard.detailOrder');
    Route::get('/pengaturan', [DashboardController::class, 'settings'])->name('dashboard.settings');
});
Route::group(['prefix' => 'toko'], function () {
    Route::get('/', [SellerController::class, 'dashboard'])->name('dashboardSeller.dashboard');
    Route::get('/profil', [SellerController::class, 'profile'])->name('dashboardSeller.profile');
    Route::get('/tambah-produk', [SellerController::class, 'addProduct'])->name('dashboardSeller.addProduct');
    Route::get('/semua-produk', [SellerController::class, 'allProduct'])->name('dashboardSeller.allProduct');
    Route::get('/ubah-produk', [SellerController::class, 'editProduct'])->name('dashboardSeller.editProduct');
    Route::get('/semua-transaksi', [SellerController::class, 'allTransaction'])->name('dashboardSeller.allTransaction');
    Route::get('/detail-transaksi', [SellerController::class, 'detailTransaction'])->name('dashboardSeller.detailTransaction');
    Route::get('/cairkan-uang', [SellerController::class, 'addWithdraw'])->name('dashboardSeller.addWithdraw');
    Route::get('/semua-pencairan-uang', [SellerController::class, 'allWithdraw'])->name('dashboardSeller.allWithdraw');
    Route::get('/detail-pencairan-uang', [SellerController::class, 'detailWithdraw'])->name('dashboardSeller.detailWithdraw');
});
// });
// seller
Route::get('/seller', [SellerController::class, 'home'])->name('seller.home');
