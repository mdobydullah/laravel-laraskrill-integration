<?php

use App\Http\Controllers\SkrillPaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SkrillPaymentController::class, 'index']);
Route::get('/payment-completed', [SkrillPaymentController::class, 'paymentCompleted']);
Route::get('/payment-cancelled', [SkrillPaymentController::class, 'paymentCancelled']);

Route::get('/make-payment', [SkrillPaymentController::class, 'makePayment']);
Route::get('/do-refund', [SkrillPaymentController::class, 'doRefund']);
Route::post('/ipn', [SkrillPaymentController::class, 'ipn']);
