<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/barang',[HomeController::class, 'barang'])->name('barang');
Route::get('/kategori', [HomeController::class, 'kategori'])->name('kategori');
Route::get('/gudang', [HomeController::class, 'gudang'])->name('gudang');

