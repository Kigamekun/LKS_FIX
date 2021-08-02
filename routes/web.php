<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('register_form');
Route::post('/admin/register', [RegisterController::class, 'registerAdmin'])->name('register_admin');


Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('login_form');
Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('login_admin');


Route::get('/all_product', [HomeController::class, 'all_product'])->name('all_product');

Route::post('/search', [HomeController::class, 'search'])->name('search');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('transaksi', TransaksiController::class);
});





Route::group(['middleware'=>'auth'],function(){
    

Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::post('/add_cart', [HomeController::class, 'add_cart'])->name('add_cart');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/beli', [HomeController::class, 'beli'])->name('beli');
});


