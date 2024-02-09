<!-- @extends('layouts.main-layout')
@section('head')
    <title>DC COMICS</title>
@endsection
@section('content')
    <h1>Hello, World!</h1>
@endsection -->

<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Fumetti</title>
</head>
<body>
    <h1>Elenco Fumetti</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>{{ $comic['title'] }}</h2>
            <p>{{ $comic['description'] }}</p>
            <p>Prezzo: {{ $comic['price'] }}</p>
            <!-- Aggiungi altri dettagli del fumetto come necessario -->
        </div>
    @endforeach
</body>
</html>
