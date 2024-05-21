<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Welcome Page
Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware(['auth', 'auth.session'])->group(function () {
    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // List all cars (index)
    Route::get('/dashboard/cars', [CarController::class, 'index'])->name('dashboard.cars.index');

    // Show the create car form
    Route::get('/dashboard/cars/create', [CarController::class, 'create'])->name('dashboard.cars.create');

    // Store a new car
    Route::post('/dashboard/cars', [CarController::class, 'store'])->name('dashboard.cars.store');

    // Show a specific car
    Route::get('/dashboard/cars/{car}', [CarController::class, 'show'])->name('dashboard.cars.show');

    // Show the edit car form
    Route::get('/dashboard/cars/{car}/edit', [CarController::class, 'edit'])->name('dashboard.cars.edit');

    // Update a specific car
    Route::put('/dashboard/cars/{car}', [CarController::class, 'update'])->name('dashboard.cars.update');

    // Delete a specific car
    Route::delete('/dashboard/cars/{car}', [CarController::class, 'destroy'])->name('dashboard.cars.destroy');
});
