<?php

use Illuminate\Support\Facades\Route;
// DUA BARIS DI BAWAH INI ADALAH KUNCI AGAR TIDAK ERROR 500
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('items', ItemController::class);