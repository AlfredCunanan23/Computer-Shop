<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\ProductController;

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
//UserController

Route::middleware('api')->group(function () {
    Route::resource('customer', CustomerController::class);
});

//ProductController

Route::middleware('api')->group(function () {
    Route::resource('product', ProductController::class);
});

//OrderConttroller

Route::middleware('api')->group(function () {
    Route::resource('order', OrderController::class);
});
