< @extends('layouts.main-layout')

@section('content')
    <h1>Elenco Fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <p>Prezzo: {{ $comic['price'] }}</p>
             Aggiungi altri dettagli del fumetto come necessario 
            </div>
    @endforeach
@endsection 