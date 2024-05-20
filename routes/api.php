<?php

use App\Http\Controllers\Api\CarApiController;
use Illuminate\Support\Facades\Route;

Route::get('/car', [CarApiController::class, 'index']);
Route::get('/car/{uuid}', [CarApiController::class, 'show']);
Route::post('/car', [CarApiController::class, 'store']);
Route::put('/car/{uuid}', [CarApiController::class, 'update']);
Route::delete('/car/{uuid}', [CarApiController::class, 'destroy']);
