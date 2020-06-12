@extends('layout')

@section("contenuto")

   @foreach ($allMembers as $member)
     <div class="persona">
      <img src="{{$member['src']}}" alt="">
      <h2>{{$member["firstName"]}} {{$member["lastName"]}}</h2>

      <p>gender:
        @if ($member["gender"] === "F")
         femmina
       @elseif ($member["gender"] === "M")
         maschio
        @endif

      </p>
      <p>age: {{$member["age"]}}</p>
     </div>


   @endforeach
@endsection
