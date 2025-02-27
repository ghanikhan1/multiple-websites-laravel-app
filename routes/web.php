<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreationController;

Route::view('/', 'home')->name('home');
Route::view('/fylo', 'fylo')->name('fylo');
Route::view('/shortly', 'shortly')->name('shortly');
Route::get('/loopstudio', [CreationController::class, 'loopStudio']);
