<?php

use App\Http\Controllers\Admin\Auth\loginController;
use App\Http\Controllers\Admin\dashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\berandaController::class, 'index'])->name('beranda');

//admin Routes
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', [loginController::class, 'index'])->name('login');
    Route::post('login', [loginController::class, 'login'])->name('login.submit');
    Route::post('logout', [loginController::class, 'logout'])->name('logout');
    Route::middleware(['auth', 'is_admin'])->group(function(){
        Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    });
});

Route::get('/datadiri', [App\Http\Controllers\datadiriController::class, 'index'])->name('datadiri');

Route::resource('aktivitas', App\Http\Controllers\aktivitasController::class)->names([
    'index' => 'aktivitas',
    'create' => 'aktivitas.create',
    'store' => 'aktivitas.store',
    'edit' => 'aktivitas.edit',
    'update' => 'aktivitas.update',
    'destroy' => 'aktivitas.destroy'
]);

Route::get('/kontak', [App\Http\Controllers\kontakController::class, 'index'])->name('kontak');
Route::get('kontak/hubungi', [App\Http\Controllers\kontakController::class, 'hubungi'])->name('hubungi');

