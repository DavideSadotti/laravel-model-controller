@extends('layouts.base')

@section('pageTitle')
	Lista di tutti i film
@endsection

@section('content')
	<h1>Lista di tutti i film</h1>

	<ul>
		@foreach ($movies as $movie)
		<li>
			<h3>{{$movie->title}}</h3>
			<h4>{{$movie->author}}</h4>
			<p>{{$movie->genre}}</p>
			<a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Dettaglio film</a>
		</li>
		@endforeach
	</ul>
@endsection