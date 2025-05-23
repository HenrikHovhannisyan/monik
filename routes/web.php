<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => ['web', 'setLocale']
    ],
    function () {
        Auth::routes();

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/faq', [PageController::class, 'faq'])->name('faq');
        Route::get('/contact', [PageController::class, 'contact'])->name('contact');
        Route::view('/offline', 'offline');

        Route::get('/shop-quick-view/{id}', [ProductController::class, 'quickView'])->name('shop.quick.view');
        Route::get('/product/{slug}', [ProductController::class, 'product'])->name('product');
        Route::get('/products', [ProductController::class, 'products'])->name('products');
        Route::get('/search', [ProductController::class, 'search'])->name('search');

        Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
        Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

        Route::middleware(['auth'])->group(function () {
            Route::get('/my-account', [PageController::class, 'account'])->name('account');
            Route::resource('addresses', AddressController::class);
            Route::resource('account', AccountController::class);
            Route::resource('cart', CartController::class);
            Route::resource('checkouts', CheckoutController::class);
            Route::resource('order-items', OrderItemController::class);
            Route::get('/order-completed',  [PageController::class, 'order_completed'])->name('order-completed');
            Route::post('/checkout/apply-promocode', [CheckoutController::class, 'applyPromocode'])->name('checkout.applyPromocode');
        });

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    }
);

Route::group(['prefix' => '/admin', 'middleware' => ['web', 'auth', 'is_admin'], 'namespace' => '\App\Http\Controllers\Admin'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/users', 'HomeController@users')->name('users');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('checkouts-admin', 'CheckoutController');
    Route::get('/checkouts/{checkout}/show', 'CheckoutController@show')->name('checkouts.show');
    Route::patch('/checkouts/{checkout}/pending', 'CheckoutController@changeStatusPending')->name('checkouts.changeStatusPending');
    Route::patch('/checkouts/{checkout}/completed', 'CheckoutController@changeStatusCompleted')->name('checkouts.changeStatusCompleted');
    Route::resource('faqs', 'FaqController');
    Route::resource('promocodes', 'PromocodeController');
});
