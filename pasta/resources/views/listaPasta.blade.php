@extends('layouts.home')

@section("main")
  <div id="allPasta">
    @foreach ($pastaGenerica as $value)
      <div class="allPastaSelection">
        <p>{{$value["tipo"]}}: <h2>{{$value["titolo"]}}</h2></p><br>
        <img src="{{$value['src']}}" alt=""><br><br>
      </div>
    @endforeach
  </div>
@endsection
