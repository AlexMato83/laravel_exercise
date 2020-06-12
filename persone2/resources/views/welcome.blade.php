@extends('layout')

@section("contenuto")

  <a id="butFemmina"href="{{route('femmine')}}">femmine</a>
  <a id="butMaschio"href="{{route('maschi')}}">maschi</a>
  <a id="butMisto"href="{{route('ibridi')}}">maschi e femmine</a>

@endsection
