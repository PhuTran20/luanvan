<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\ThuongHieuController;    
use App\Http\Controllers\LoaiGiayController;    
  
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

Route::post('/trangchu', [UserController::class, 'dangnhap']);

Route::get('/logout', [UserController::class, 'logout']);

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

//category
Route::get('/', [ThuongHieuController::class, 'index'])->name('index');
Route::get('/shop', [ThuongHieuController::class, 'shop'])->name('shop');
Route::get('/detail', [ThuongHieuController::class, 'index'])->name('index');
Route::get('/cart', [ThuongHieuController::class, 'index'])->name('index');
Route::get('/checkout', [ThuongHieuController::class, 'index'])->name('index');
Route::get('/contact', [ThuongHieuController::class, 'index'])->name('index');

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
Route::get('/edit-ThuongHieu/{idthuonghieu}', [ThuongHieuController::class, 'edit_ThuongHieu']);
Route::get('/delete-ThuongHieu/{idthuonghieu}', [ThuongHieuController::class, 'delete_ThuongHieu']);
Route::post('/update-ThuongHieu', [ThuongHieuController::class, 'update_ThuongHieu']);
Route::get('/thuonghieu', [ThuongHieuController::class, 'index']);
//LoaiGiay
Route::get('/quanli_loaigiay', [LoaiGiayController::class, 'all_LoaiGiay'])->name('quanli_loaigiay');
Route::get('/add-LoaiGiay', [LoaiGiayController::class, 'add_LoaiGiay']);
Route::get('/all-LoaiGiay', [LoaiGiayController::class, 'all_LoaiGiay']);
Route::post('/save-LoaiGiay', [LoaiGiayController::class, 'save_LoaiGiay']);
Route::get('/edit-LoaiGiay/{idloaigiay}', [LoaiGiayController::class, 'edit_LoaiGiay','et_loaigiay']);
Route::get('/delete-LoaiGiay/{idloaigiay}', [LoaiGiayController::class, 'delete_LoaiGiay']);
Route::post('/update-LoaiGiay', [LoaiGiayController::class, 'update_LoaiGiay']);

//QuanLiUser
Route::get('/quanli-user', [UserController::class, 'all_User'])->name('quanli_user');
Route::get('/all-User', [UserController::class, 'all_User']);