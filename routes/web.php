<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\PesertaController as UserPesertaController;
use App\Http\Controllers\User\SkemaController as UserSkemaController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('/', 'welcome')->name('welcome');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.proses');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // area admin
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('skema', SkemaController::class)->except('show');
        Route::resource('peserta', PesertaController::class)->parameters(['peserta' => 'peserta']);
    });

    // area user
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
        Route::get('peserta', [UserPesertaController::class, 'index'])->name('peserta.index');
        Route::get('peserta/{peserta}', [UserPesertaController::class, 'show'])->name('peserta.show');
        Route::get('skema', [UserSkemaController::class, 'index'])->name('skema.index');
    });
});