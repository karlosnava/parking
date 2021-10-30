<?php

use Illuminate\Support\Facades\Route;

// CONTROLLER
use App\Http\Controllers\LoginController;


// LOGIN
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);


Route::get('/', function () {
  return view('welcome');
});
