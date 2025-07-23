<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Landing Page (Public)
|--------------------------------------------------------------------------
| Redirect authenticated users to /home automatically.
| Guests will see the home.index (landing page).
*/
Route::get('/', [AdminController::class, 'home'])->name('landing');

/*
|--------------------------------------------------------------------------
| Authenticated Dashboard Redirect
|--------------------------------------------------------------------------
| This route redirects the user to their appropriate dashboard
| based on usertype: admin, drugstore, or customer.
| Protected by Jetstream’s auth and email verification middleware.
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
});

/*
|--------------------------------------------------------------------------
| Optional: Manual Logout Route (if not using Jetstream's built-in logout)
|--------------------------------------------------------------------------
*/
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');


Route::middleware(['auth', 'isAdmin'])->group(function () {

    // Show the add customer form
    Route::get('add-customer', [AdminController::class, 'createCustomer'])->name('admin.create');

    // Handle the form submission
    Route::post('store-customer', [AdminController::class, 'storeCustomer'])->name('admin.store');

    // View customers table
    Route::get( 'view-customers', [AdminController::class, 'viewCustomers'])->name('admin.view');
});

