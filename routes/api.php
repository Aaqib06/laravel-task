<?php

use App\Http\Controllers\YourController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/product', [YourController::class, 'index']);
Route::get('/product/{id}', [YourController::class, 'show']);
Route::post('/product', [YourController::class, 'store']);
Route::put('/product/{id}', [YourController::class, 'update']);
Route::delete('/product/{id}', [YourController::class, 'destroy']);