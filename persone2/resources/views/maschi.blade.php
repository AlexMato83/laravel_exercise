@extends('layout')

@section("contenuto")

  @foreach ($maschi as $maschio)
    <div class="persona">
     <img src="{{$maschio['src']}}" alt="">
     <h2>{{$maschio["firstName"]}} {{$maschio["lastName"]}}</h2>
     <p>gender: {{$maschio["gender"]}}</p>
     <p>age: {{$maschio["age"]}}</p>
    </div>
  @endforeach


@endsection
