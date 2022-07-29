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
Route::get("customer/index", [CustomerController::class, "index"]);
Route::get("customer/show/{id}", [CustomerController::class, "show"]);
Route::post("customer/make", [CustomerController::class, "make"]);
Route::put("customer/edit/{id}", [CustomerController::class, "edit"]);
Route::put("customer/update/{id}", [CustomerController::class, "update"]);
Route::delete("customer/delete/{id}", [CustomerController::class, "deleteUser"]);

Route::middleware('api')->group(function () {
    Route::resource('customer', CustomerController::class);
});

//ProductController
Route::get("product/index/{part}", [ProductController::class, "index"]);
Route::get("product/show/{id}", [ProductController::class, "show"]);
Route::post("product/make/", [ProductController::class, "make"]);
Route::put("product/edit/{id}", [ProductController::class, "edit"]);
Route::put("product/update/{id}", [ProductController::class, "update"]);
Route::delete("product/delete/{id}", [ProductController::class, "destroy"]);

Route::middleware('api')->group(function () {
    Route::resource('product', ProductController::class);
});

//OrderConttroller
Route::get("order/index", [OrderController::class, "index"]);
Route::get("order/show/{id}", [OrderController::class, "show"]);
Route::post("order/make", [OrderController::class, "make"]);
Route::put("order/edit/{id}", [OrderController::class, "edit"]);
Route::put("order/update/{id}", [OrderController::class, "update"]);
Route::delete("order/delete/{order_id}", [OrderController::class, "destroy"]);

Route::middleware('api')->group(function () {
    Route::resource('order', OrderController::class);
});
