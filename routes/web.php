<?php

use App\Http\Controllers\VasteController;
use Illuminate\Support\Facades\Route;

Route::get('/vaste', [VasteController::class, 'index'])->name('vaste');
