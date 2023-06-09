@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Torna alla lista di fumetti</a>
        <h2>Dettagli: {{$comic->title}} </h2>
        <img class="w-25" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <p> Prezzo: {{$comic->price}} </p>
        <p> Serie: {{$comic->series}} </p>
        <p> Data uscita: {{$comic->sale_date}} </p>
        <p> Descrizione: {{$comic->description}} </p>
    </div>
@endsection