<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function weather(Request $request, WeatherService $weatherService)
    {
        $request->validate([
            'city' => 'required|string|min:2',
        ]);

        return response()->json(
            $weatherService->getByCity($request->city)
        );
    }
}
