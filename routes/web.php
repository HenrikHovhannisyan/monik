<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Services\Localization\LocalizationService;

use App\Http\Controllers\{
    AccountController,
    AddressController,
    Auth\GoogleController,
    Auth\LoginController,
    CartController,
    CheckoutController,
    HomeController,
    OrderItemController,
    PageController,
    ProductController
};

// Локализованные маршруты
Route::group([
    'prefix' => LocalizationService::locale(),
    'middleware' => ['web', 'setLocale'],
], function () {

    // Аутентификация
    Auth::routes();

    // Общие страницы
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::view('/offline', 'offline');
    Route::get('/faq', [PageController::class, 'faq'])->name('faq');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    // Продукты
    Route::prefix('product')->group(function () {
        Route::get('/{slug}', [ProductController::class, 'product'])->name('product');
    });
    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/shop-quick-view/{id}', [ProductController::class, 'quickView'])->name('shop.quick.view');
    Route::get('/search', [ProductController::class, 'search'])->name('search');

    // Google OAuth
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

    // Авторизованные маршруты
    Route::middleware('auth')->group(function () {

        // Аккаунт
        Route::get('/my-account', [PageController::class, 'account'])->name('account');
        Route::resource('account', AccountController::class);
        Route::resource('addresses', AddressController::class);

        // Корзина и заказ
        Route::resource('cart', CartController::class);
        Route::resource('checkouts', CheckoutController::class);
        Route::post('/checkout/apply-promocode', [CheckoutController::class, 'applyPromocode'])->name('checkout.applyPromocode');
        Route::get('/order-completed', [PageController::class, 'order_completed'])->name('order-completed');
        Route::resource('order-items', OrderItemController::class);

        // Уведомления
        Route::post('/notifications/read/{notification}', function (\App\Models\Notification $notification) {
            if (auth()->id() === $notification->user_id) {
                $notification->update(['status' => 'read']);
            }
            return back();
        })->name('notifications.read');

        Route::post('/notifications/ajax-read/{notification}', function (\App\Models\Notification $notification) {
            if (auth()->id() === $notification->user_id) {
                $notification->update(['status' => 'read']);
                return response()->json(['success' => true]);
            }
            return response()->json(['success' => false], 403);
        })->name('notifications.ajax.read');
    });

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Админка
Route::group([
    'prefix' => 'admin',
    'middleware' => ['web', 'auth', 'is_admin'],
    'namespace' => '\App\Http\Controllers\Admin',
], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/users', 'HomeController@users')->name('users');

    Route::resources([
        'categories' => 'CategoryController',
        'products' => 'ProductController',
        'checkouts-admin' => 'CheckoutController',
        'faqs' => 'FaqController',
        'promocodes' => 'PromocodeController',
    ]);

    // Заказы (детали и изменение статуса)
    Route::get('/checkouts/{checkout}/show', 'CheckoutController@show')->name('checkouts.show');
    Route::patch('/checkouts/{checkout}/pending', 'CheckoutController@changeStatusPending')->name('checkouts.changeStatusPending');
    Route::patch('/checkouts/{checkout}/completed', 'CheckoutController@changeStatusCompleted')->name('checkouts.changeStatusCompleted');
});
