<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        // first method call
        // $movies = Movie::all();

        // second method call
        // visualize all movies
        $movies = Movie::select('*')->get();

        return view('index', compact('movies'));
    }
}
