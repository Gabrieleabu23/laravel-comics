
@extends('layouts.main-layout')

@section('content')
    <h1>Elenco Fumetti</h1>

    
    <div class="row ">
        @foreach ($comics as $comic)
             <div class="col-2">
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
                <p>Prezzo: {{ $comic['price'] }}</p>
                <img src="{{ $comic['thumb'] }}" alt="">
            </div> 
        @endforeach
    </div>
@endsection 