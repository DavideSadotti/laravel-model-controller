@extends('layouts.base')

@section('pageTitle')
    Modifica film: {{ $movie->title }}
@endsection

@section('content')
<div>
    <form action="{{ route('movies.store') }}" moethod="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value='{{ $movie->title }}'>
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Regista" value='{{ $movie->author }}'>
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Generi" value='{{ $movie->genre }}'>
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <input type="text" class="form-control" id="plot" name="plot" placeholder="Trama" value='{{ $movie->plot }}'>
        </div>
        <div class="form-group">
            <select class="form-control" id="year" name="year" value='{{ $movie->year }}'>
                @for ($i = 1900; $i <= date("y") + 1; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection