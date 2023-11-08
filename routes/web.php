<?php

use App\Http\Controllers\CorredorController;
use App\Http\Controllers\CorridaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('corredors',CorredorController::class);
Route::resource('corridas',CorridaController::class);
