<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;

Route::get('/cars', [CarController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::resource('cars', CarController::class);
Route::redirect('/', '/cars');