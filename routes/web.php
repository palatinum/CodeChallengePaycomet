<?php

use App\Http\Controllers\GetJetIframeController;
use Illuminate\Support\Facades\Route;
use Paycomet\Purchase\Infrastructure\Inputadapter\Laravel\Http\Controllers\ExecutePurchaseController;

Route::get('/', GetJetIframeController::class);
Route::post('/execute-purchase', ExecutePurchaseController::class)->name('execute-purchase');
