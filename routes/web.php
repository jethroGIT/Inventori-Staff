<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;

Route::resource('barang', BarangController::class);
Route::resource('ruangan', RuanganController::class);

Route::get('/', function () {
    return view('welcome');
});
