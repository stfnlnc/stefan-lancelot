<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewCollectiveController;
use App\Http\Controllers\VasteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/works', [MainController::class, 'works'])->name('works');
Route::get('/services', [MainController::class, 'services'])->name('services');
