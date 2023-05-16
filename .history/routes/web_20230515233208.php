<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\ThuongHieuController;    
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
//user
Route::post('/register', [UserController::class, 'register']);

Route::get('/insert-User', [UserController::class, 'insert_User']);

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
Route::get('/register', function () {
    return view('register');
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
 

//Thuonghieu
Route::get('/quanli_thuonghieu', [ThuongHieuController::class, 'all_ThuongHieu'])->name('quanli_thuonghieu');
Route::get('/add-ThuongHieu', [ThuongHieuController::class, 'add_ThuongHieu']);
Route::get('/all-ThuongHieu', [ThuongHieuController::class, 'all_ThuongHieu']);
Route::post('/save-ThuongHieu', [ThuongHieuController::class, 'save_ThuongHieu']);
Route::get('/edit-ThuongHieu/{IDTheLoai}', [ThuongHieuController::class, 'edit_ThuongHieu']);
// Route::get('/delete-ThuongHieu/{IDTheLoai}', [ThuongHieuController::class, 'delete_ThuongHieu']);
// Route::post('/update-ThuongHieu', [ThuongHieuController::class, 'update_ThuongHieu']);