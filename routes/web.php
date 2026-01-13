<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WeatherViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WeatherViewController::class, 'index']);
