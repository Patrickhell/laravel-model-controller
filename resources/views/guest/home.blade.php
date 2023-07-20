@extends('layouts.app')
@section ('title', 'Homepage')

@section('main-content')
@foreach($movies as $movie)
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $movie->title}}</li>
        <li class="list-group-item">{{ $movie->original_title}}</li>
        <li class="list-group-item">{{ $movie->nationality}}</li>
        <li class="list-group-item">{{ $movie->date}}</li>
        <li class="list-group-item">{{ $movie->vote}}</li>
    </ul>
</div>


@endforeach



@endsection