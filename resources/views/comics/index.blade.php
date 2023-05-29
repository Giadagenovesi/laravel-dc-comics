@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri fumetti</h2>   
        
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
                        <td> Bottone</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection