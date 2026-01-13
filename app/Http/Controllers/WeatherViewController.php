<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherViewController extends Controller
{
    public function index(Request $request, WeatherService $weatherService)
    {
        $weather = null;
        $error = null;

        if ($request->filled('city')) {
            $result = $weatherService->getByCity($request->city);

            if ($result['success']) {
                $weather = $result['data'];
            } else {
                $error = $result['message'];
            }
        }

        return view('weather', compact('weather', 'error'));
    }
}
