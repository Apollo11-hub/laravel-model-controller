@extends('layouts.main')


@section('title', 'MovieSite | Movies')


@section('content')

<div>
    <ul>
        @foreach ($movies_db as $movie)
        <hr>
        <li>{{$movie->id}}</li>
        <li>{{$movie->title}}</li>
        <li>{{$movie->original_title}}</li>
        <li>{{$movie->nationality}}</li>
        <li>{{$movie->date}}</li>
        <li>{{$movie->vote}}</li>
        <hr>
        @endforeach

    </ul>
</div>

@endsection
