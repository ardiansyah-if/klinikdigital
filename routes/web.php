<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekamMedisController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/rekam-medis', [RekamMedisController::class, 'index']);