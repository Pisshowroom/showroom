<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AddressSellerController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDataController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RegionalController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Clients\AuthController as ClientsAuthController;
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

Route::post('/pi/signin', [ClientsAuthController::class, 'piLogin']);
Route::post('/login', [ClientsAuthController::class, 'login']);


Route::get("home", [HomeController::class, 'home']);
Route::get("stats-count", [HomeController::class, 'statsCount']);
Route::get("categories", [HomeController::class, 'categories']);
Route::get("just-categories", [HomeController::class, 'justCategories']);
Route::get("sub-categories", [HomeController::class, 'subCategories']);
Route::POST("manual-create-pay-req", [OrderController::class, 'manualCreatePayReq']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard2', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'categories', 'middleware' => 'auth:api-client'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::post('/', [CategoryController::class, 'store']);
        Route::get('/{category}', [CategoryController::class, 'show']);
        Route::post('update/{category}', [CategoryController::class, 'update']);
        Route::delete('/{category}', [CategoryController::class, 'destroy']);
    });

    Route::group(['prefix' => 'sub-categories', 'middleware' => 'auth:api-client'], function () {
        Route::get('/', [SubCategoryController::class, 'index']);
        Route::post('/', [SubCategoryController::class, 'store']);
        Route::get('/{subCategory}', [SubCategoryController::class, 'show']);
        Route::post('update/{subCategory}', [SubCategoryController::class, 'update']);
        Route::delete('/{subCategory}', [SubCategoryController::class, 'destroy']);
    });
});


Route::group(['prefix' => 'article'], function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'products']);
    Route::middleware('auth:api-client')->group(function () {
        Route::get('/seller/my-products', [ProductController::class, 'sellerMyProducts']);
        Route::post('/store-or-update-product', [ProductController::class, 'storeOrUpdateProduct']);
        Route::delete('/{product}', [ProductController::class, 'destroy']);
    });

    Route::get('/{product}', [ProductController::class, 'show']);
    Route::get('/show-simple/{product}', [ProductController::class, 'showSimple']);
});

Route::prefix('payment')->group(function () {
    Route::get('payment-list', [PaymentController::class, 'index']);
});

Route::group(['prefix' => 'addresses', 'middleware' => 'auth:api-client'], function () {
    Route::get('/', [AddressController::class, 'index']);
    Route::post('/store-or-update', [AddressController::class, 'storeOrUpdate']);
    Route::post('/set-main-address/{address}', [AddressController::class, 'setMainAddress']);
    Route::delete('delete/{address}', [AddressController::class, 'destroy']);
});

Route::group(['prefix' => 'address-seller', 'middleware' => 'auth:api-client'], function () {
    Route::get('/', [AddressSellerController::class, 'index']);
    Route::post('/store-or-update', [AddressSellerController::class, 'storeOrUpdate']);
    Route::post('/set-main-address/{address}', [AddressSellerController::class, 'setMainAddress']);
    Route::delete('delete/{address}', [AddressSellerController::class, 'destroy']);
});

Route::group(['prefix' => 'user'], function () {
    Route::post('/login-firebase', [AuthController::class, 'loginFirebase']);
    Route::get('/get-a-seller/{sellerId}', [UserController::class, 'getASeller']);

    Route::middleware('auth:api-client')->group(function () {
        Route::get('/profile', [UserController::class, 'profile']);
        Route::post('/update-profile', [UserController::class, 'updateProfile']);
        Route::post('/update-seller', [UserController::class, 'updateSeller']);
        Route::post('/register-as-seller', [UserController::class, 'registerAsSeller']);
        Route::post('/logout', [UserController::class, 'logout']);
    });
});

Route::group(['prefix' => 'reviews'], function () {
    Route::post('store-or-update', [ReviewController::class, 'storeOrUpdate']);
    Route::get('limited-of-product/{productId}', [ReviewController::class, 'getLimitedReviewsOfAProduct']);
    Route::get('of-a-product/{productId}', [ReviewController::class, 'getAllReviewsOfAProduct']);
});

Route::group(['prefix' => 'order'], function () {
    Route::get('/ddelv', [OrderController::class, 'dummyDelivery']);
    Route::post('/precheck-early', [OrderController::class, 'preCheckEarly']);
    Route::post('/precheck', [OrderController::class, 'preCheck']);
    Route::post('/precheck-with-delivery', [OrderController::class, 'precheckWithDelivery']);
    Route::post('/checkout', [OrderController::class, 'checkout']);
    Route::get('/check-shipping-price', [OrderController::class, 'checkShippingPrice']);
    Route::post('/waybill-check', [OrderController::class, 'waybillCheck']);

    Route::middleware('auth:api-client')->group(function () {
        Route::get('/index', [OrderDataController::class, 'index']);
        Route::get('/seller-list-order', [OrderDataController::class, 'sellerListOrder']);
        Route::get('/{order}', [OrderDataController::class, 'detail']);
        Route::post('/seller-accept/{order}', [OrderDataController::class, 'sellerAcceptOrder']);
        Route::post('/seller-reject/{order}', [OrderDataController::class, 'sellerRejectOrder']);
        Route::post('/seller-send/{order}', [OrderDataController::class, 'sellerSendOrder']);
        Route::post('/check-status-delivered/{order}', [OrderDataController::class, 'checkStatusDeliveredOrder']);
        Route::post('/completed-order/{order}', [OrderDataController::class, 'completedOrder']);
        Route::post('/buyer-cancel-order/{order}', [OrderDataController::class, 'buyerCancelOrder']);

    });
});

Route::prefix('regionals')->group(function () {
    Route::get('/provinces', [RegionalController::class, 'provinces']);
    Route::get('/cities/{provinceId}', [RegionalController::class, 'citiesByProvince']);
    Route::get('/subdistricts/{cityId}', [RegionalController::class, 'subdistrictsByCity']);
});
