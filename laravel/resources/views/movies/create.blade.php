@extends('layouts.base')

@section('pageTitle')
    Aggiungi un nuovo film
@endsection

@section('content')
<div>
    <form action="{{ route('movies.store') }}" moethod="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>
        <div class="form-group">
            <label for="author">Regista</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Regista">
        </div>
        <div class="form-group">
            <label for="genre">Generi</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Generi">
        </div>
        <div class="form-group">
            <label for="plot">Trama</label>
            <input type="text" class="form-control" id="plot" name="plot" placeholder="Trama">
        </div>
        <div class="form-group">
            <select class="form-control" id="year" name="year">
                @for ($i = 1900; $i <= date("y") + 1; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection