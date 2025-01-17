<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
