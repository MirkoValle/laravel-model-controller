@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Movie list
    </h1>

    <section>
        @foreach ($movies as $movie)
        <article>
            <h2> Title: {{ $movie->title }} </h2>
            <h4> Original title: {{ $movie->original_title }} </h4>
            <p> {{ $movie->nationality }} </p>
            <p> {{ $movie->date }} </p>
            <p> Vote: {{ $movie->vote }} </p>
        </article>
        @endforeach
    </section>
@endsection
