<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ProductController::class, 'index']);
Route::post('/create', [ProductController::class, 'create']);
Route::get('/show/{id}', [ProductController::class, 'show']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::post('/delete/{id}', [ProductController::class, 'destroy']);
Route::post('/customer', [CustomerController::class, 'CreateCustomer']);

Route::post('/api/login', [AuthController::class, 'login']);