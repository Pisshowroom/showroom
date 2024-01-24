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
use App\Http\Controllers\Clients\buyer\WishlistController;
use App\Http\Controllers\Clients\NotificationController;
use App\Http\Controllers\Clients\RefundController;
use App\Http\Controllers\Clients\seller\ProductController as SellerProductController;
use App\Http\Controllers\Clients\seller\SellerController;
use App\Http\Controllers\Clients\seller\TransactionOrderController;
use App\Http\Controllers\Clients\seller\WithdrawController;
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

if (env('SUSPENDED') == true || env('SUSPENDED') == 'true') {
    Route::get('/', function () {
        return view('thestatus');
    });

    Route::get('/{any}', function ($any) {
        return view('thestatus');
    })->where('any', '.*');
} else {
    Route::get('/', [BuyerController::class, 'home'])->name('buyer.home');
}

Route::get('/thestatus', function () {
    return view('thestatus');
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
        $setting->value = "4866825564.40";
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
// Route::get('/', [BuyerController::class, 'home'])->name('buyer.home');
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
Route::get('/kebijakan-privasi', [BuyerController::class, 'privacy'])->name('buyer.privacy');
Route::get('/ketentuan-hapus-akun', [BuyerController::class, 'termDeleteUser'])->name('buyer.termDeleteUser');
Route::get('/tentang-kami', [BuyerController::class, 'about'])->name('buyer.about');
Route::get('/syarat-dan-ketentuan', [BuyerController::class, 'term'])->name('buyer.term');

Route::get('/semua-penjual', [BuyerSellerController::class, 'allSeller'])->name('buyer.allSeller');
Route::get('/penjual-{slug}', [BuyerSellerController::class, 'detailSeller'])->name('buyer.detailSeller');
Route::get('/detail_toko-{id}', [BuyerSellerController::class, 'detailSeller2'])->name('buyer.detailSeller2');


Route::get('/semua-artikel', [ArticleController::class, 'allArticle'])->name('buyer.allArticle');
Route::get('/detail-artikel/{id}', [ArticleController::class, 'detailArticle'])->name('buyer.detailArticle');

Route::get('/semua-produk', [BuyerProductController::class, 'allListProduct'])->name('buyer.allListProduct');
Route::get('/semua-produk-grid', [BuyerProductController::class, 'allGridProduct'])->name('buyer.allGridProduct');
Route::get('/produk-{slug}', [BuyerProductController::class, 'detailProduct'])->name('buyer.detailProduct');
Route::get('/detailProduct-{id}', [BuyerProductController::class, 'detailProduct2'])->name('buyer.detailProduct2');
Route::post('/tambah-ulasan', [BuyerProductController::class, 'addReview'])->name('buyer.addReview');

Route::get('/pembeli/pembayaran-pi/{identifier}', [BuyerOrderController::class, 'piPayment'])->name('dashboard.pi_payment');

Route::get('/subcategories/{id?}', [DashboardController::class, 'subCategory'])->name('getSubCategory');
Route::prefix('regionals')->group(function () {
    Route::get('/cities/{id?}', [DashboardController::class, 'citiesByProvince'])->name('getCity');
    Route::get('/subdistricts/{id?}', [DashboardController::class, 'subdistrictsByCity'])->name('getDistrict');
});

// Route::get('/detail-produk/{slug}', [BuyerController::class, 'detailProduct'])->name('buyer.detailProduct');

Route::get('/transaksi/detail-{id}', [BuyerController::class, 'detailOrder2'])->name('dashboard.detailOrder2');
Route::get('/detail_penjualan-{id}', [BuyerController::class, 'detailTransaction2'])->name('dashboardSeller.detailTransaction2');

Route::group(['middleware' => ['auth:web']], function () {
    Route::post('/perbarui-profil', [DashboardController::class, 'updateProfile'])->name('dashboard.updateProfile');
    Route::post('/tambah-alamat', [DashboardController::class, 'updateAddress'])->name('dashboard.updateAddress');
    Route::get('/hapus-alamat/{id}', [DashboardController::class, 'deleteAddress'])->name('dashboard.deleteAddress');
    Route::get('/hapus-akun/{id}', [DashboardController::class, 'deleteAccount'])->name('dashboard.deleteAccount');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cancel-order', [DashboardController::class, 'cancelOrder'])->name('cancelOrder');
    Route::get('/delete-order', [DashboardController::class, 'deleteOrder'])->name('deleteOrder');
    Route::get('/detail-notifikasi/{id}', [NotificationController::class, 'detailNotif'])->name('dashboard.detailNotif');
    Route::get('/hapus-notifikasi/{id}', [NotificationController::class, 'deleteNotification'])->name('dashboard.deleteNotification');


    Route::group(['prefix' => 'pembeli'], function () {
        // Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
        Route::get('/pembayaran/{identifier}', [BuyerOrderController::class, 'payment'])->name('dashboard.payment');
        Route::get('/pesananku', [BuyerOrderController::class, 'myOrder'])->name('dashboard.myOrder');
        Route::get('/detail-pesanan/{identifier}', [BuyerOrderController::class, 'detailOrder'])->name('dashboard.detailOrder');
        Route::get('/pengaturan', [DashboardController::class, 'settings'])->name('dashboard.settings');
        Route::get('/ubah-alamat/{id}', [DashboardController::class, 'changeAddress'])->name('dashboard.changeAddress');
        Route::get('/kirim-nomor-resi/{identifier}', [BuyerOrderController::class, 'sendProductBack'])->name('dashboard.sendProductBack');
        Route::post('/kirim-barang-kembali', [BuyerOrderController::class, 'buyerSendingOrder'])->name('dashboard.buyerSendingOrder');
        Route::get('/batalkan-pengembalian/{identifier}', [BuyerOrderController::class, 'cancelRefundReturnComplaint'])->name('dashboard.cancelRefundReturnComplaint');
        Route::get('/completed-order/{id}', [BuyerOrderController::class, 'completedOrder'])->name('dashboard.completedOrder');
        Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('buyer.wishlist');
        Route::post('/tambah/wishlist', [WishlistController::class, 'store'])->name('buyer.addWishlist');
        Route::get('/hapus/wishlist', [WishlistController::class, 'destroy'])->name('buyer.deleteWishlist');
        Route::get('/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');
        Route::post('/precheck-early', [BuyerOrderController::class, 'preCheckEarly'])->name('buyer.preCheckEarly');
        Route::post('/precheck', [BuyerOrderController::class, 'preCheck'])->name('buyer.preCheck');
        Route::post('/precheck-with-delivery', [BuyerOrderController::class, 'precheckWithDelivery'])->name('buyer.precheckWithDelivery');
        Route::post('/checkout', [BuyerOrderController::class, 'checkout'])->name('buyer.preCheckout');
        Route::get('/keranjang', [BuyerController::class, 'cart'])->name('buyer.cart');
        Route::get('/index-history-fund', [RefundController::class, 'indexHistoryFund'])->name('dashboard.indexHistoryFund');
        Route::get('/keluhan-terkait-produk/{identifier}', [RefundController::class, 'detailOrderForComplain'])->name('dashboard.detailOrderForComplain');
        Route::post('/pengajuan-pengembalian-dana', [RefundController::class, 'requestRefund'])->name('dashboard.requestRefund');
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
        Route::get('/ubah-alamat/{id}', [SellerController::class, 'addressSeller'])->name('dashboardSeller.addressSeller');
        Route::post('/tambah-alamat', [SellerController::class, 'updateAddressSeller'])->name('dashboardSeller.updateAddressSeller');
        Route::get('/hapus-alamat/{id}', [SellerController::class, 'cancelRefundReturnComplaint'])->name('dashboardSeller.deleteAddressSeller');
        Route::get('/tambah-produk', [SellerProductController::class, 'addProduct'])->name('dashboardSeller.addProduct');
        Route::post('/tambah-ubah-produk', [SellerProductController::class, 'addUpdateProduct'])->name('dashboardSeller.addUpdateProduct');
        Route::post('/tambah-ubah-produk-varian', [SellerProductController::class, 'addUpdateProductVariant'])->name('dashboardSeller.addUpdateProductVariant');
        Route::get('/semua-produk', [SellerProductController::class, 'allProduct'])->name('dashboardSeller.allProduct');
        Route::get('/ubah-produk/{id}', [SellerProductController::class, 'editProduct'])->name('dashboardSeller.editProduct');
        Route::get('/varian-produk/{id}', [SellerProductController::class, 'variantProduct'])->name('dashboardSeller.variantProduct');
        Route::get('/hapus-produk/{id}', [SellerProductController::class, 'deleteProduct'])->name('dashboardSeller.deleteProduct');
        Route::get('/semua-transaksi', [TransactionOrderController::class, 'allTransaction'])->name('dashboardSeller.allTransaction');
        Route::get('/detail-transaksi/{identifier}', [TransactionOrderController::class, 'detailTransaction'])->name('dashboardSeller.detailTransaction');

        Route::get('/penjual-kirim-nomor-resi/{identifier}', [TransactionOrderController::class, 'sendResi'])->name('dashboardSeller.sendResi');
        Route::get('/penjual-terima/{id}', [TransactionOrderController::class, 'sellerAcceptOrder'])->name('dashboardSeller.sellerAcceptOrder');
        Route::get('/penjual-tolak/{id}', [TransactionOrderController::class, 'sellerRejectOrder'])->name('dashboardSeller.sellerRejectOrder');
        Route::post('/penjual-kirim', [TransactionOrderController::class, 'sellerSendOrder'])->name('dashboardSeller.sellerSendOrder');
        Route::get('/penjual-cek-status-diantar/{id}', [TransactionOrderController::class, 'checkStatusDeliveredOrder'])->name('dashboardSeller.checkStatusDeliveredOrder');

        Route::group(['prefix' => 'complaint'], function () {
            Route::post('/accept-complaint/{id}', [TransactionOrderController::class, 'acceptComplaint'])->name('dashboardSeller.acceptComplaint');
            Route::post('/accept-return-back/{id}', [TransactionOrderController::class, 'acceptReturnBack'])->name('dashboardSeller.acceptReturnBack');
            Route::post('/accept-refund/{id}', [TransactionOrderController::class, 'acceptRefund'])->name('dashboardSeller.acceptRefund');
            Route::post('/reject-complaint/{id}', [TransactionOrderController::class, 'rejectComplaint'])->name('dashboardSeller.rejectComplaint');
            Route::post('/reject-return-back/{id}', [TransactionOrderController::class, 'rejectReturnBack'])->name('dashboardSeller.rejectReturnBack');
            Route::post('/reject-refund/{id}', [TransactionOrderController::class, 'rejectRefund'])->name('dashboardSeller.rejectRefund');
        });


        Route::get('/cairkan-uang', [WithdrawController::class, 'addWithdraw'])->name('dashboardSeller.addWithdraw');
        Route::get('/semua-pencairan-uang', [WithdrawController::class, 'allWithdraw'])->name('dashboardSeller.allWithdraw');
        Route::get('/detail-pencairan-uang/{id}', [WithdrawController::class, 'detailWithdraw'])->name('dashboardSeller.detailWithdraw');
        Route::post('/ajukan-pencairan-uang', [WithdrawController::class, 'storeOrUpdate'])->name('dashboardSeller.storeOrUpdate');
        Route::get('/hapus-pencairan-uang/{id}', [WithdrawController::class, 'deleteWithdraw'])->name('dashboardSeller.deleteWithdraw');
        Route::post('/perbarui-profil', [SellerController::class, 'updateProfile'])->name('dashboardSeller.updateProfile');
    });
});


// seller
Route::get('/seller', [SellerController::class, 'home'])->name('seller.home');


Route::get('/getb', function () {
    // *1
    /* createNotificationData(1, "Pesanan Masuk","Pesanan sudah dibayar dengan Identifier : 082934JHAsjhda",
    null, null, null); */
});


Route::get('/geta', function () {
    abort(500, "Bad Request");
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
    // 4
    $array1 = [1, 4, 7, 10];
    $array2 = [2, 5, 8, 11];
    $array3 = [3, 6, 9, 12];

    $arraysData = array_merge($array1, $array2);
    $arraysData = array_merge($arraysData, $array3);
    // * Approaches 1
    // asort($arraysData);
    // * Approaches 2
    $arraysSorted = [];
    // Get the length of the array
    $arrayLength = count($arraysData);

    // Implementing Bubble Sort (Ascending Order)
    for ($i = 0; $i < $arrayLength - 1; $i++) {
        for ($j = 0; $j < $arrayLength - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($arraysData[$j] > $arraysData[$j + 1]) {
                $temp = $arraysData[$j];
                $arraysData[$j] = $arraysData[$j + 1];
                $arraysData[$j + 1] = $temp;
            }
        }
    }

    dd($arraysData);
});
