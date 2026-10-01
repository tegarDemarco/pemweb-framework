<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\berandaController::class, 'index']) ->name('beranda');

Route::get('/datadiri', [App\Http\Controllers\datadiriController::class, 'index'])->name('datadiri');

Route::get('/aktivitas', [App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
