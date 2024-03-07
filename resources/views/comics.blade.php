@extends('layouts.main')

@section('title', 'COMICS')

@section('main-content')
<div class="container">
    <div class="row g-3 py-4">
        @foreach ($comics as $comic)
        <div class="comic-card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <h5>{{$comic['title']}}</h5>
         </div>
        @endforeach
    </div>
</div>
  
@endsection