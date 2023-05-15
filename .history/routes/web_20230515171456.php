<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/login', function () {
    return view('login');
});

//admin
Route::get('/trangchu-admin', function () {
    return view('trangchu_admin');
})->name('trangchu');

Route::get('/quanli-sanpham', function () {
    return view('quanli_sanpham');
})->name('quanli_sanpham');

Route::get('/quanli-user', function () {
    return view('quanli_user');
})->name('quanli_user');

Route::get('/quanli-blog', function () {
    return view('quanli_blog');
})->name('quanli_blog');

Route::get('/quanli-danhgia', function () {
    return view('quanli_danhgia');
})->name('quanli_danhgia');

Route::get('/quanli-donhang', function () {
    return view('quanli_donhang');
})->name('quanli_donhang');