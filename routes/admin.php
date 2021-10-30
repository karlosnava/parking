<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\CarsController;

Route::get('/', [CarsController::class, 'index'])->name('cars.index');

// CAR ACTIONS
Route::get('car/create', [CarsController::class, 'create'])->name('cars.create');
Route::get('car/{id}', [CarsController::class, 'edit'])->name('cars.edit');
Route::post('car/{id}', [CarsController::class, 'store'])->name('cars.store');
Route::patch('car/{id}', [CarsController::class, 'update'])->name('cars.update');
Route::delete('car/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
