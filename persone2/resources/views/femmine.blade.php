@extends('layout')

@section("contenuto")

  @foreach ($femmine as $femmina)
    <div class="persona">
     <img src="{{$femmina['src']}}" alt="">
     <h2>{{$femmina["firstName"]}} {{$femmina["lastName"]}}</h2>
     <p>gender: {{$femmina["gender"]}}</p>
     <p>age: {{$femmina["age"]}}</p>
    </div>
  @endforeach

@endsection
