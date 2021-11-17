<?php

use App\Http\Controllers\ProductController;
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
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('top', function () {
        return view('client.pages.top');
    })->name('top');
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
});

