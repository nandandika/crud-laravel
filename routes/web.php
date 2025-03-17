<?php

use Illuminate\Support\Facades\Route;
use App\Models\buku;
use App\Http\Controllers\BukuController;

Route::get('/', [BukuController::class, 'index']);

Route::resource('buku', BukuController::class);