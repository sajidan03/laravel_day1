<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('landing');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/home', [ProdukController::class, 'index'])->name('home');
