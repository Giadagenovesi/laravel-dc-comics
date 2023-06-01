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

        <form action="{{ route('comics.store') }}" method="POST">
            {{-- csrf è un codice per questa form che laravel usa per capire che è un form del sito senza questo laravel blocca i dati e non farà arrivare nessuna richiesta, DA RICORDARE ASSOLUTAMENTE --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"  value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    <option value="" >Seleziona</option>
                    <option @selected(old('type') === 'graphic novel') value="graphic novel">graphic novel</option>
                    <option @selected(old('type') === 'comic book') value="comic book">comic book</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"  value="{{ old('series') }}">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"  value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"> {{ old('description') }} </textarea>
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>
@endsection