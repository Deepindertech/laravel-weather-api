<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getByCity(string $city): array
    {
        $url = config('services.weather.url');

        if (!$url) {
            return [
                'success' => false,
                'message' => 'Weather service is not configured.',
            ];
        }

        $response = Http::get($url, [
            'q' => $city,
            'appid' => config('services.weather.key'),
            'units' => 'metric',
        ]);

        if ($response->failed() || ($response->json('cod') ?? 200) != 200) {
            return [
                'success' => false,
                'message' => 'City not found. Please try another city.',
            ];
        }

        return [
            'success' => true,
            'data' => $response->json(),
        ];
    }
}
