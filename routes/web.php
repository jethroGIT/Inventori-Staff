<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;

// Route::resource('barang', BarangController::class);
// Route::resource('ruangan', RuanganController::class);

Route::get('barang', [BarangController::class, 'index'])->name('barang');
Route::get('barang/create', [BarangController::class, 'create']);
Route::post('barang/store', [BarangController::class, 'store']);
Route::get('barang/{id}/view', [BarangController::class, 'show']);
Route::get('barang/{id}/edit', [BarangController::class, 'edit']);
Route::patch('barang/{id}/update', [BarangController::class, 'update']);
Route::get('barang/{id}/destroy', [BarangController::class, 'destroy']);


Route::get('ruangan', [RuanganController::class, 'index'])->name('ruangan');
Route::get('ruangan/add', [RuanganController::class, 'add']);
Route::post('ruangan/create', [RuanganController::class, 'create']);
Route::get('ruangan/{id}/view', [RuanganController::class, 'show']);
Route::get('ruangan/{id}/edit', [RuanganController::class, 'edit']);
Route::patch('ruangan/{id}/update', [RuanganController::class, 'update']);
Route::get('ruangan/{id}/delete', [RuanganController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
