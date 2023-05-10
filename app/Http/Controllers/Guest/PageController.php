<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        // visualize all movies
        $movies = Movie::select('*')->get();

        return view('index', compact('movies'));
    }
}
