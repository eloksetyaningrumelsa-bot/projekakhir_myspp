<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;

// Dashboard
Route::get('/', [HomeController::class, 'index'])->name('dashboard');

// Data Siswa
Route::get('/datasiswa', [SiswaController::class, 'index']);
Route::get('/datasiswa/tambah', [SiswaController::class, 'create']);
Route::post('/datasiswa', [SiswaController::class, 'store']);
Route::get('/datasiswa/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/datasiswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/datasiswa/delete/{id}', [SiswaController::class, 'destroy']);

// Data Kelas
Route::get('/datakelas', [KelasController::class, 'index']);
Route::get('/datakelas/tambah', [KelasController::class, 'create']);
Route::post('/datakelas', [KelasController::class, 'store']);
Route::get('/datakelas/edit/{id}', [KelasController::class, 'edit']);
Route::put('/datakelas/update/{id}', [KelasController::class, 'update']);
Route::get('/datakelas/delete/{id}', [KelasController::class, 'destroy']);

// Data Pembayaran
Route::get('/datapembayaran', [PembayaranController::class, 'index']);
Route::get('/datapembayaran/tambah', [PembayaranController::class, 'create']);
Route::post('/datapembayaran', [PembayaranController::class, 'store']);
Route::get('/datapembayaran/edit/{id}', [PembayaranController::class, 'edit']); 
Route::put('/datapembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::get('/datapembayaran/delete/{id}', [PembayaranController::class, 'destroy']);

// Laporan
Route::get('/laporan', [LaporanController::class, 'index']);
// Route::get('/datapembayaran/tambah', [PembayaranController::class, 'create']);
// Route::post('/datapembayaran', [PembayaranController::class, 'store']);
// Route::get('/datapembayaran/edit/{id}', [PembayaranController::class, 'edit']); 
// Route::put('/datapembayaran/update/{id}', [PembayaranController::class, 'update']);
// Route::get('/datapembayaran/delete/{id}', [PembayaranController::class, 'destroy']);

// Halaman tambahan
Route::get('login', function () {
    return view('login');
});

Route::get('modalbayar', function () {
    return view('modalbayar');
});
