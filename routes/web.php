<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix("/")->group(function(){
    Route::get('/', [ProductController::class, 'newProduct'])->name('new');
    Route::get('all', [ProductController::class, 'allProduct'])->name('all');
    Route::get('top', [ProductController::class, 'topProduct'])->name('top');
    Route::get('outerwear', [ProductController::class, 'outerwearProduct'])->name('outerwear');
    Route::get('bottom', [ProductController::class, 'bottomProduct'])->name('bottom');
    Route::get('accessories', [ProductController::class, 'accProduct'])->name('acc');
    Route::get('sale', function () {
        return view('client.pages.sale');
    })->name('sale');
    Route::get('size', function () {
        return view('client.pages.size');
    })->name('size');
    Route::get('about', function () {
        return view('client.pages.about');
    })->name('about');
    Route::get('info', function () {
        return view('client.pages.info');
    })->name('info');
    Route::get('cart', function () {
        return view('client.pages.cart');
    })->name('cart');

    Route::get('product_detail/{id}', [ProductDetailController::class, 'productDetail'])->name('product_detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [UserController::class, 'loginIndex'])->name('login');
Route::post('/login', [LoginController::class, 'loginClient'])->name('client.login');
Route::get('/register', [UserController::class, 'registerIndex'])->name('register');
Route::post('/register', [RegisterController::class, 'registerClient'])->name('client.register');
// Route::get('/logout', [LoginController::class, 'logoutClient'])->name('logout.client');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Mail with queue job
Route::get('/testMail', [MailController::class, 'test']);