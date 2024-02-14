<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container my-5">
        <div class="row">
            <h1 class="text-center">Film List</h1>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-6 mt-5">
                    <div class="card p-2">
                        <h4 class="card-title text-center">{{ $movie['title'] }}</h4>
                        <p class="card-text text-center">{{ $movie['original_title'] }}</p>
                        <span class="card-text">Nazione: {{ $movie['nationality'] }}</span>
                        <span class="card-text">Data di uscita: {{ $movie['date'] }}</span>
                        <span class="card-text">Voto: {{ $movie['vote'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
