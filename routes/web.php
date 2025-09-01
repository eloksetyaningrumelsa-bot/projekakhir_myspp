<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});
<<<<<<< Updated upstream
Route::get('Datasiswa', function () {
    return view('Datasiswa');
=======
Route::get('datasiswa', function () {
    return view('datasiswa');
>>>>>>> Stashed changes
});
