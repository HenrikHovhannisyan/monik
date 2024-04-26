<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'is_admin'], 'namespace' => '\App\Http\Controllers\Admin'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/users', 'HomeController@users')->name('users');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});


