<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DrugstoreController;

// Landing Page Routes
Route::get('/', [LandingController::class, 'home']);

// Superadmin Routes
Route::get('/home', [SuperadminController::class, 'index'])->name('home');
Route::get('/superadmin/create-customer', [SuperadminController::class, 'create_customer'])->name('superadmin.create_customer');
Route::post('/superadmin/store-customer', [SuperadminController::class, 'store_customer'])->name('superadmin.customers.store');


// Customer Routes

// Drugstore Routes
