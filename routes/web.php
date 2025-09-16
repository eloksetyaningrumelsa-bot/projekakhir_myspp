<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\SiswaController;

Route::get('/', [HomeController::class, 'Dashbord']);


Route::get('/', function () {
    return view('Dashboard');
});
//data siswa 
Route::get('/datasiswa', [SiswaController::class, 'index']);
Route::get('/datasiswa/tambah', [SiswaController::class, 'create'])->name('datasiswa.add');
Route::post('/datasiswa', [SiswaController::class, 'store']);
Route::get('/datasiswa/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/datasiswa/update/{id}', [SiswaController::class, 'update']);


// data kelas 
Route::get('/datakelas', [KelasController::class, 'index']);
Route::get('/datakelas/tambah', [KelasController::class, 'create'])->name('datakelas.add');
Route::post('/datakelas', [KelasController::class, 'store']);



Route::get('datapembayaran', function () {
    return view('datapembayaran');
});
Route::get('login', function () {
    return view('login');
});
Route::get('modalbayar', function () {
    return view('modalbayar');
});

