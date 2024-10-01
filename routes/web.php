<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\BarangController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

Route::get('/cek-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Koneksi database berhasil!';
    } catch (\Exception $e) {
        return 'Koneksi database gagal: ' . $e->getMessage();
    }
});

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
Route::get('/', function () {
    return view('pelanggan.index');  // Nama file template di resources/views/index.blade.php
});
Route::get('/blog', function () {
    return view('pelanggan.blog');  // Nama file template di resources/views/blog.blade.php
});
Route::get('/about', function () {
    return view('pelanggan.about');  // Nama file template di resources/views/blog.blade.php
});
Route::get('/cart', function () {
    return view('pelanggan.cart');  // Nama file template di resources/views/cart.blade.php
});
Route::get('/checkout', function () {
    return view('pelanggan.checkout');  // Nama file template di resources/views/checkout.blade.php
});
Route::get('/product-single', function () {
    return view('pelanggan.product-single');  // Nama file template di resources/views/product-single.blade.php
});
Route::get('/shop', function () {
    return view('pelanggan.shop');  // Nama file template di resources/views/shop.blade.php
});
Route::get('/cart', function () {
    return view('pelanggan.cart');  // Nama file template di resources/views/cart.blade.php
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [HomeController::class, 'home']);
	Route::group(['middleware' => 'auth'], function () {
		Route::get('/dashboard', [SessionsController::class, 'index'])->name('dashboard');
	});
	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('/profile', function () {
		return view('Admin.profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('/kelola-produk', function () {
		return view('Admin.laravel-examples.kelola-produk');
	})->name('kelola-produk');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('/static-sign-in', function () {
		return view('Admin.static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/session', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});
Route::get('/create',function(){
    return view('Admin.laravel-examples.create');
});
Route::get('/edit',function(){
    return view('Admin.laravel-examples.edit');
});
// route dashboard admin
Route::get('/admin/dashboard', [SessionsController::class, 'index'])->name('Admin.dashboard');

// Produk
Route::get('admin/products', [BarangController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [BarangController::class, 'create'])->name('products.create');
Route::post('admin/products', [BarangController::class, 'store'])->name('products.store');
Route::get('admin/products/{id}/edit', [BarangController::class, 'edit'])->name('products.edit');
Route::put('admin/products/{id}', [BarangController::class, 'update'])->name('products.update');
Route::delete('admin/products/{id}', [BarangController::class, 'destroy'])->name('products.destroy');

// Kelola Produk
Route::get('/kelola-produk', [BarangController::class, 'index'])->name('kelola-produk');


