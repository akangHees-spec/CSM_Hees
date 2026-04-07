<?php

use App\Http\Controllers\LandingPages\LandingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index']);