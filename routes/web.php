<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DrugstoreController;

//Landing Page Routes
Route::get('/',[LandingController::class,'home']);


//Superadmin Routes
Route::get('/home', [SuperadminController::class, 'index'])->name('home');


//Customer Routes



//Drugstore Routes