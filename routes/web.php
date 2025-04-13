<?php

use App\Http\Controllers\DonateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DonateController::class, 'form']);
Route::post('/donation/checkout', [DonateController::class, 'checkout']);
Route::get('/donation/thanks', [DonateController::class, 'thanks']);
