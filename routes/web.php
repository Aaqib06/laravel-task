<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\YourController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('product');
});
Route::post('product-add', [productController::class, 'product_add']);
Route::get('product-view', [productController::class, 'product_view']);
Route::get('product-delete', [productController::class, 'product_delete']);
Route::post('product-edit', [productController::class, 'product_edit']);
Route::get('product-list', [productController::class, 'product_list']);




Route::get('/product', [YourController::class, 'index']);
Route::get('/product/{id}', [YourController::class, 'show']);
Route::post('/product', [YourController::class, 'store']);
Route::put('/product/{id}', [YourController::class, 'update']);
Route::delete('/product/{id}', [YourController::class, 'destroy']);