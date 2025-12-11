<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkinController;

Route::get('/', [SkinController::class, 'index']);

Route::resource('skins', SkinController::class);
