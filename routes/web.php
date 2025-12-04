<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/entrar', [RegisterController::class, 'index']);


Route::get('/crear-cuenta', [RegisterController::class, 'index']);
Route::post('/crear-cuenta', [RegisterController::class, 'index']);

