<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\buyer\ArticleController;
use App\Http\Controllers\Clients\buyer\ProductController as BuyerProductController;
use App\Http\Controllers\Clients\buyer\SellerController as BuyerSellerController;
use App\Http\Controllers\Clients\BuyerController;
use App\Http\Controllers\Clients\buyer\DashboardController;
use App\Http\Controllers\Clients\buyer\OrderController as BuyerOrderController;
use App\Http\Controllers\Clients\seller\ProductController as SellerProductController;
use App\Http\Controllers\Clients\seller\SellerController;
use App\Http\Controllers\Clients\seller\TransactionOrderController;
use App\Models\Order;
use App\Models\Review;
use App\Models\Setting;
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

Route::get('/geta', function () {
    // return App\Models\RoSubdistrict::find(18)->load('ro_city.ro_province');
    /*  $orders = Order::whereNull('seller_id')->get();
    // 2
    $result = $orders->map(function ($order) {
        $product = $order->order_items()->first()->product;

        return [
            'id_order' => $order->id,
            'id_product' => $product->id,
            'id_seller' => $product->seller_id,
        ];
    }); */

    /* foreach ($result as $item) {
        Order::where('id', $item['id_order'])->update(['seller_id' => $item['id_seller']]);
    } */
    // 3
    // return Review::whereNotNull('images')->where('images', '!=', '[]')->get();
});

Route::post('/0xff-callback-confirm-payment/{type}', [OrderController::class, 'callbackConfirmPayment']);

Route::get('/forcing-auth/{id}', function (Request $request) {
    $user_id = $request->id;
    $user = App\Models\User::find($user_id);
    $token = $user->createToken('lypsis-auth')->plainTextToken;
    return response()->json([
        'token' => $token
    ]);
});

Route::get('/check-shipping-price', function (Illuminate\Http\Request $request) {
    $originId = $request->query('origin_id');
    $destinationId = $request->query('destination_id');
    $weight = $request->query('weight');

    $shippingCost = checkShippingPrice($originId, $destinationId, $weight);

    return response()->json($shippingCost);
});

Route::post('convert-to-pi', function (Request $request) {
    $setting = Setting::where("name", "pi")->first();

    if (!$setting) {
        $setting = new Setting();
        $setting->name = "pi";
        $setting->value = "558647.95";
        $setting->save();
    }

    return response()->json(["price" => (1 / (float) $setting->value) * ($request->price)]);
});

Route::get('/authed', function () {
    // $authUser = auth()->user();
    // $authUser = Auth::guard('api-client')->user();

    // return $authUser;
    $user = App\Models\User::find(1);
    return ResponseAPI(['error' => 'Stok Produk ' . 'asdasdasd' . " tidak cukup. stok yang tersisa sebanyak " . 12], 400);
    // Auth::login($user, true);
    $userAuth = Auth::guard('api-client')->setUser($user);
    // dd($userAuth);
    $data = Auth::user();

    return $user->createToken('lypsis-auth')->plainTextToken;
    // return ResponseAPI($userAuth);
    return ResponseAPI($data);
    // return $userAuth;

    return $data;
});
// })->middleware('auth:sanctum');


// Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*');
Route::get('/admin{any}', [AppController::class, 'index'])->where('any', '.*');

// buyer
Route::get('/', [BuyerController::class, 'home'])->name('buyer.home');
Route::get('/masuk', [BuyerController::class, 'login'])->name('buyer.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginUsingGoogle'])->name('loginUsingGoogle');
Route::post('/login-email', [AuthController::class, 'loginEmail'])->name('loginEmail');
Route::post('/login-pi', [AuthController::class, 'piLogin'])->name('loginWithPI');
Route::get('/login-session', [AuthController::class, 'loginSession'])->name('loginWithCookie');
Route::get('/mendaftar', [BuyerController::class, 'register'])->name('buyer.register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerUsingGoogle'])->name('registerUsingGoogle');
Route::post('/register-email', [AuthController::class, 'registerEmail'])->name('registerEmail');
Route::get('/tidak-ditemukan', [BuyerController::class, 'notFound'])->name('buyer.notFound');
Route::get('/kontak-kami', [BuyerController::class, 'contact'])->name('buyer.contact');
Route::get('/tentang-kami', [BuyerController::class, 'about'])->name('buyer.about');
Route::get('/syarat-dan-ketentuan', [BuyerController::class, 'term'])->name('buyer.term');

Route::get('/semua-penjual', [BuyerSellerController::class, 'allSeller'])->name('buyer.allSeller');
Route::get('/penjual-{slug}', [BuyerSellerController::class, 'detailSeller'])->name('buyer.detailSeller');


Route::get('/semua-artikel', [ArticleController::class, 'allArticle'])->name('buyer.allArticle');
Route::get('/detail-artikel/{id}', [ArticleController::class, 'detailArticle'])->name('buyer.detailArticle');

Route::get('/semua-produk', [BuyerProductController::class, 'allListProduct'])->name('buyer.allListProduct');
Route::get('/semua-produk-grid', [BuyerProductController::class, 'allGridProduct'])->name('buyer.allGridProduct');
Route::get('/produk-{slug}', [BuyerProductController::class, 'detailProduct'])->name('buyer.detailProduct');
Route::post('/tambah-ulasan', [BuyerProductController::class, 'addReview'])->name('buyer.addReview');

Route::prefix('regionals')->group(function () {
    Route::get('/cities/{id?}', [DashboardController::class, 'citiesByProvince'])->name('getCity');
    Route::get('/subdistricts/{id?}', [DashboardController::class, 'subdistrictsByCity'])->name('getDistrict');
});

// Route::get('/detail-produk/{slug}', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');


Route::group(['middleware' => ['auth:web']], function () {
    Route::post('/perbarui-profil', [DashboardController::class, 'updateProfile'])->name('dashboard.updateProfile');
    Route::post('/tambah-alamat', [DashboardController::class, 'updateAddress'])->name('dashboard.updateAddress');
    Route::get('/hapus-alamat/{id}', [DashboardController::class, 'deleteAddress'])->name('dashboard.deleteAddress');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cancel-order', [DashboardController::class, 'cancelOrder'])->name('cancelOrder');
    Route::get('/delete-order', [DashboardController::class, 'deleteOrder'])->name('deleteOrder');
    Route::group(['prefix' => 'pembeli'], function () {
        // Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
        Route::get('/pembayaran/{identifier}', [BuyerOrderController::class, 'payment'])->name('dashboard.payment');
        Route::get('/pesananku', [BuyerOrderController::class, 'myOrder'])->name('dashboard.myOrder');
        Route::get('/detail-pesanan/{identifier}', [BuyerOrderController::class, 'detailOrder'])->name('dashboard.detailOrder');
        Route::get('/pengaturan', [DashboardController::class, 'settings'])->name('dashboard.settings');
        Route::get('/ubah-alamat/{id}', [DashboardController::class, 'changeAddress'])->name('dashboard.changeAddress');
        Route::get('/wishlist', [BuyerController::class, 'wishlist'])->name('buyer.wishlist');
        Route::get('/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');
        Route::post('/precheck-early', [BuyerOrderController::class, 'preCheckEarly'])->name('buyer.preCheckEarly');
        Route::post('/precheck', [BuyerOrderController::class, 'preCheck'])->name('buyer.preCheck');
        Route::post('/precheck-with-delivery', [BuyerOrderController::class, 'precheckWithDelivery'])->name('buyer.precheckWithDelivery');
        Route::post('/checkout', [BuyerOrderController::class, 'checkout'])->name('buyer.preCheckout');


        Route::get('/keranjang', [BuyerController::class, 'cart'])->name('buyer.cart');
    });
    Route::group(['prefix' => 'pi'], function () {
        Route::post('incomplete', [BuyerOrderController::class, 'serverIncomplete']);
        Route::post('approve', [BuyerOrderController::class, 'serverApprove']);
        Route::post('complete', [BuyerOrderController::class, 'serverComplete']);
        Route::post('cancelled_payment', [BuyerOrderController::class, 'serverCancel']);
    });
    Route::group(['prefix' => 'toko'], function () {
        Route::get('/', [SellerController::class, 'dashboard'])->name('dashboardSeller.dashboard');
        Route::get('/profil', [SellerController::class, 'profile'])->name('dashboardSeller.profile');
        Route::get('/tambah-produk', [SellerProductController::class, 'addProduct'])->name('dashboardSeller.addProduct');
        Route::post('/tambah-ubah-produk', [SellerProductController::class, 'addUpdateProduct'])->name('dashboardSeller.addUpdateProduct');
        Route::get('/semua-produk', [SellerProductController::class, 'allProduct'])->name('dashboardSeller.allProduct');
        Route::get('/ubah-produk/{id}', [SellerProductController::class, 'editProduct'])->name('dashboardSeller.editProduct');
        Route::get('/hapus-produk/{id}', [SellerProductController::class, 'deleteProduct'])->name('dashboardSeller.deleteProduct');
        Route::get('/semua-transaksi', [SellerController::class, 'allTransaction'])->name('dashboardSeller.allTransaction');
        Route::get('/detail-transaksi/{identifier}', [SellerController::class, 'detailTransaction'])->name('dashboardSeller.detailTransaction');
        Route::get('/penjual-terima/{order}', [TransactionOrderController::class, 'sellerAcceptOrder'])->name('dashboardSeller.sellerAcceptOrder');
        Route::get('/penjual-tolak/{order}', [TransactionOrderController::class, 'sellerRejectOrder'])->name('dashboardSeller.sellerRejectOrder');
        Route::get('/penjual-cek-status-diantar/{order}', [TransactionOrderController::class, 'checkStatusDeliveredOrder'])->name('dashboardSeller.checkStatusDeliveredOrder');
        Route::get('/cairkan-uang', [SellerController::class, 'addWithdraw'])->name('dashboardSeller.addWithdraw');
        Route::get('/semua-pencairan-uang', [SellerController::class, 'allWithdraw'])->name('dashboardSeller.allWithdraw');
        Route::get('/detail-pencairan-uang', [SellerController::class, 'detailWithdraw'])->name('dashboardSeller.detailWithdraw');
        Route::post('/perbarui-profil', [SellerController::class, 'updateProfile'])->name('dashboardSeller.updateProfile');
    });
});
// seller
Route::get('/seller', [SellerController::class, 'home'])->name('seller.home');
