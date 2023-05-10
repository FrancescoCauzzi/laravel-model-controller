@extends('layouts/main_layout')

@section('content')
<div class="container">

    <h1>
        Movies DB
    </h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            {{$movie}}
        </li>
        @endforeach
    </ul>
</div>



@endsection
