<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WeatherController;

Route::get('/weather', [WeatherController::class, 'weather']);
//Route::get('/weather', [WeatherController::class, '']);