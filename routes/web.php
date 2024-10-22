<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KtpController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/ktps', \App\Http\Controllers\KtpController::class);
Route::get('/check-kk/{no_kk}', [KtpController::class, 'checknoKk'])->name('ktps.checknoKk');
