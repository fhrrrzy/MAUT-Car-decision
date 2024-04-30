<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Car Routes
Route::resource('/dashboard/cars', CarController::class)->except([
    'show' // Exclude 'show' route
]);
