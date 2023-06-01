@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Inserisci un nuovo fumetto</h2>
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
            
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    <option>Seleziona</option>
                    <option  @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">graphic novel</option>
                    <option  @selected(old('type', $comic->type) === 'comic book') value="comic book">comic book</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"> {{ old('desscription', $comic->description) }} </textarea>
            </div>

            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>
@endsection