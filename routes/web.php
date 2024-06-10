<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

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
        Route::get('/my-account', [PageController::class, 'account'])->name('account');

        Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
        Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    }
);

Route::group(['prefix' => '/admin', 'middleware' => ['web', 'auth', 'is_admin'], 'namespace' => '\App\Http\Controllers\Admin'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/users', 'HomeController@users')->name('users');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('faqs', 'FaqController');
});





