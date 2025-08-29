<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('Datasiswa', function () {
    return view('Datasiswa');
});
