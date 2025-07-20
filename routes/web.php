<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

// Order Management Routes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/cargo', [OrderController::class, 'cargo'])->name('orders.cargo');
    Route::get('/parcel', [OrderController::class, 'parcel'])->name('orders.parcel');
});
