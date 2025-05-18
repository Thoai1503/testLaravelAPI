<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getmydata', [MyController::class, 'index']);

Route::post('/login',[ AuthController::class, 'login' ]);
Route::post('/register',[ AuthController::class, 'register' ]);
Route::get('/logout',[ AuthController::class, 'logout' ]);