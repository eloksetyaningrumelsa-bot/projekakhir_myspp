<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('datasiswa', function () {
    return view('datasiswa');
});
Route::get('datakelas', function () {
    return view('datakelas');
});
Route::get('datapembayaran', function () {
    return view('datapembayaran');
});
Route::get('login', function () {
    return view('login');
});

