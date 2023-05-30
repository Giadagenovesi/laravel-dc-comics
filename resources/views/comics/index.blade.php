@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri fumetti</h2> 
        
        <div class="my-4 text-center">
            <a class="btn btn-success" href=" {{route('comics.create')}} ">Inserisci un nuovo fumetto</a>
        </div>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"> {{$comic->id}} </th>
                        <td> {{$comic->title}} </td>
                        <td>{{$comic->type}}</td>
                        <td> 
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-success">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection