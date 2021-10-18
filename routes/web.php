<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

// Oredering System
Route::get('/products', [ProductController::class, 'index']);
// Route::get('/signup', [ProductController::class, 'signup']);
// Route::get('/signin', [ProductController::class, 'signin']);
Route::get('/checkout', [ProductController::class, 'checkout']);
Route::get('/tambahproduct', [ProductController::class, 'tambahproduct'])->middleware('auth');
Route::post('createproduct', [ProductController::class, 'createproduct'])->name('createproduct');

// Reporting System
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/404', [AuthController::class, 'error']);
Route::get('/forgot', [AuthController::class, 'forgot']);
Route::get('/listadmin', [UserController::class, 'index']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
Route::post('createadmin', [UserController::class, 'createAdmin'])->name('createadmin');

Route::group(['middleware' => ['auth', 'cek_role:Owner']], function(){
    Route::get('/tambahadmin', [UserController::class, 'tambahadmin']);
});

Route::get('/carts', [CartController::class, 'index']);
Route::get('/cart/{id}', [CartController::class, 'Cart'])->name('cart');