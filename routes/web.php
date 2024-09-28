<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaziController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'login']);
Route::get('/gazi', [GaziController::class, 'deffault']);
Route::post('/', [AuthController::class, 'auth_login']);
