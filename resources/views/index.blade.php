@extends('layouts/main_layout')

@section('content')

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



@endsection
