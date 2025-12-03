<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/works', [MainController::class, 'works'])->name('works');
Route::get('/services', [MainController::class, 'services'])->name('services');
