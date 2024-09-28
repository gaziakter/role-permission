<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaziController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/gazi', [GaziController::class, 'deffault']);
