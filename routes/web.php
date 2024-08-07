<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

Route::get('/qr-code', [QRCodeController::class, 'showForm'])->name('qr.showForm');
Route::post('/qr-code', [QRCodeController::class, 'generateQRCode'])->name('qr.generate');

Route::get('/', function () {
    return view('welcome');
});
