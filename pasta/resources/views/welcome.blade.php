@extends('layouts.home')

@section("main")

  @for ($i=0; $i < $numberCycles; $i++)
    <div>{{$i+1}}: {{$prova}}
    <ul>
    @for ($j=0; $j < 3; $j++)
      <li>{{$prova2}}</li>
    @endfor
    </ul>
    </div>
  @endfor
@endsection
