<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    
use App\Http\Controllers\ThuongHieuController;    
use App\Http\Controllers\LoaiGiayController;    
use App\Http\Controllers\ProductController;    
use App\Http\Controllers\AdminController;   
  
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

Route::post('/', [UserController::class, 'dangnhap']);

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



Route::get('/admin',[AdminController::class,'dangnhap']);

Route::post('/admin',[AdminController::class,'kiemtraDN']);

Route::get('/logout', [AdminController::class, 'logout']);


//thuonghieu
Route::get('/', [ThuongHieuController::class, 'index'])->name('index');
 
 
Route::get('/shop', [ThuongHieuController::class, 'indexshop'])->name('shop');
Route::get('/detail', [ThuongHieuController::class, 'indexdetail'])->name('detail');
Route::get('/cart', [ThuongHieuController::class, 'indexcart'])->name('cart');
Route::get('/checkout', [ThuongHieuController::class, 'indexcheckout'])->name('checkout');
Route::get('/contact', [ThuongHieuController::class, 'indexcontact'])->name('contact');
 
 //sanpham
 Route::get('/quanli_sanpham', [ProductController::class, 'all_Product'])->name('quanli_sanpham');
Route::get('/add-Product', [ProductController::class, 'add_Product']);
Route::get('/all-Product', [ProductController::class, 'all_Product']);
Route::post('/save-Product', [ProductController::class, 'save_Product']);
 

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