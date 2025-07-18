<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuperadminController;

Route::get('/',[LandingController::class,'home']);

Route::get('/home', [SuperadminController::class, 'index'])->name('home');
