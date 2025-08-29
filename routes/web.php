<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('datasiswa', function () {
    return view('datasiswa');
});
