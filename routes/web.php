<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Landing\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');

// Auth
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Admin - dengan middleware auth
Route::prefix('admino')->name('admino.')->middleware('auth')->group(function () {
    // Company Profile
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('about.index');
    Route::get('/company-profile/edit', [CompanyProfileController::class, 'edit'])->name('about.edit');
    Route::post('/company-profile/store', [CompanyProfileController::class, 'store'])->name('about.store');

    // ── Home / Hero Section ──
    Route::get('home', [HomeController::class, 'index'])->name('home.index');
    Route::get('home/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('home', [HomeController::class, 'store'])->name('home.store');
});
