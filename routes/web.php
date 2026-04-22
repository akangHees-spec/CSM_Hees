<?php

use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});

// Auth
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Admin - dengan middleware auth
Route::prefix('sigma')->name('sigma.')->middleware('auth')->group(function () {
    // Company Profile
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::get('/company-profile/edit', [CompanyProfileController::class, 'edit'])->name('company-profile.edit');
    Route::post('/company-profile/store', [CompanyProfileController::class, 'store'])->name('company-profile.store');

    // Halaman lain (bisa ditambah controller tersendiri nanti)
    Route::get('/home', [CompanyProfileController::class, 'index'])->name('home.index');
    Route::get('/about', [CompanyProfileController::class, 'index'])->name('about.index');
    Route::get('/contact', [CompanyProfileController::class, 'index'])->name('contact.index');
});
