@extends('layouts/main_layout')

@section('content')
<div class="container py-5">

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
