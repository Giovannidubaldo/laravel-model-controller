<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie_card', compact('movies'));
    }

    public function singleFilm($films)
    {
        $movies = Movie::all();
        $movie = $movies->find($films);
        return view('single_film', compact('movie'));
    }
}
