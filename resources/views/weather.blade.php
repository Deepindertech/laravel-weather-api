<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">🌦️ Weather App</h2>

    <form method="GET" class="mb-4">
        <input type="text" name="city" class="form-control" placeholder="Enter city name">
    </form>

    @if($weather)
        <div class="card">
            <div class="card-body text-center">
                <h4>{{ $weather['name'] }}</h4>
                <p>🌡 {{ $weather['main']['temp'] }} °C</p>
                <p>Feels like {{ $weather['main']['feels_like'] }} °C</p>
                <p>☁ {{ ucfirst($weather['weather'][0]['description']) }}</p>
                <p>💧 {{ $weather['main']['humidity'] }}%</p>
            </div>
        </div>
    @endif
</div>
@if($error)
    <div class="alert alert-danger text-center">
        {{ $error }}
    </div>
@endif

</body>
</html>
