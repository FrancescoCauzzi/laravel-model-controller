@extends('layouts/main_layout')

@section('content')
<div class="container py-5">

    <h1>
        Movies DB
    </h1>

    <div class="d-flex flex-wrap justify.content-center __movie-list">
        @foreach ($movies as $movie)
        <div>
            <div class="card __card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <h6>Original title: {{$movie->original_title}}</h6>
                  <p>Nationality: {{$movie->nationality}}</p>
                  <p>Year: {{$movie->date}}</p>
                  <p>Rate: {{$movie->vote}}</p>

                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>



@endsection
