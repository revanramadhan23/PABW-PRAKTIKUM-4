<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('laporan.form'));

Route::get('/lapor', [LaporanController::class, 'form'])->name('laporan.form');
Route::post('/lapor', [LaporanController::class, 'kirim'])->name('laporan.kirim');
Route::get('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
