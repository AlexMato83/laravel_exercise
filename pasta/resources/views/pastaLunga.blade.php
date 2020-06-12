@extends('layouts.home')

@section("main")
  <div id="pastaLunga">
    @foreach ($pastaGenerica as $value)
      @if ($value["tipo"] === "lunga")
        <div class="pastaLunga">
          <p>{{$value["tipo"]}}: <h2>{{$value["titolo"]}}</h2></p><br>
          <img src="{{$value['src']}}" alt=""><br><br>
        </div>
      @endif
    @endforeach
  </div>

@endsection
