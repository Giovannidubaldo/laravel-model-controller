@extends('layout.app')
@section('content')
    <div class="container my-5">
        <a href="{{ route('films') }}" class="btn btn-sm btn-primary">Torna indietro</a>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <div class="card p-3">
                    <h4 class="card-title text-center"> {{ $movie['title'] }} </h4>
                    <p class="card-text text-center">{{ $movie['original_title'] }}</p>
                    <span class="card-text">Nazione: {{ $movie['nationality'] }}</span>
                    <span class="card-text">Data di uscita: {{ $movie['date'] }}</span>
                    <span class="card-text">Voto: {{ $movie['vote'] }}</span>
                    <span class="card-text">Descrizione: </span>
                </div>
            </div>
        </div>
    </div>
@endsection
