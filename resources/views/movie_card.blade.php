@extends('layout.app')
@section('content')
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
@endsection
