@extends('layouts.main')

@section('title', 'MOVIES')

@section('main-content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="comic-card">
            <img src="{{$movie['thumb']}}" alt="{{$movie['title']}}">
            <h5>{{$movie['title']}}</h5>
         </div>
        @endforeach
    </div>
</div>
  
@endsection