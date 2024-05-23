<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;




Route::view('d', 'dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('auth', [AuthController::class, 'authenticate'])->name('auth');
});

Route::middleware('auth')->group(function () {
    // Route::get('layanan', [LayananController::class, 'index'])->name('layanan');
    // Route::post('layanan', [LayananController::class, 'create'])->name('layanan.create');


    Route::resource('layanan', LayananController::class);

    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::post('pelanggan', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('confirm', [PelangganController::class, 'confirm'])->name('pelanggan.confirm');
    Route::post('confirmBayar', [PelangganController::class, 'confirmBayar'])->name('pelanggan.confirmBayar');
    Route::get('auth', [AuthController::class, 'logout'])->name('auth.logout');
});
