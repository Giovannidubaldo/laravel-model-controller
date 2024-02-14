@extends('layout.app')
@section('content')
    <main class="vw-100 vh-100 d-flex justify-content-center align-items-center">
        <div>
            <h2 class="text-center">La nostra film-list</h2>
            <div class="d-flex justify-content-center">
                <a href="{{ route('films') }}" class="btn btn-sm btn-primary">Visualizza film</a>
            </div>
        </div>
    </main>
@endsection
