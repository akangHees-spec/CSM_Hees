<?php

use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});

//Auth
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//admin home
Route::prefix('sigma')->name('sigma.')->middleware('auth')->group(function() {
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::post('/company-profile/update', [CompanyProfileController::class, 'update'])->name('company-profile.update');

    Route::get('/home', [CompanyProfileController::class, 'index'])->name('home.index');
    Route::get('/about', [CompanyProfileController::class, 'index'])->name('about.index');
    Route::get('/contact', [CompanyProfileController::class, 'index'])->name('contact.index');
});