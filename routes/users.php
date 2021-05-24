<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['user']], function () {
        // checkout
        Route::get('/checkout', [App\Http\Controllers\Frontend\Payment\CheckoutController::class, 'index']);
        Route::post('/checkout/save', [App\Http\Controllers\Frontend\Payment\CheckoutController::class, 'saveCheckout']);

    });
});