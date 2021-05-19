@extends('layouts.base')

@section('pageTitle')
	Lista di film
@endsection

@section('content')
	<a href="{{route('movies.index')}}">Torna all'home page</a>
	<h1>{{$movie->title}}</h1>
	<h2>{{$movie->year}}</h2>
	<p>{{$movie->plot}}</p>
@endsection