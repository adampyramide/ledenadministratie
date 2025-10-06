@extends('layouts.app')

@section('content')
    <h1>Contributie</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Leeftijd:</strong> {{ $contributie->leeftijd }}</li>
        <li class="list-group-item"><strong>Soort lid:</strong> {{ $contributie->soortLid->omschrijving ?? '-' }}</li>
        <li class="list-group-item"><strong>Bedrag:</strong> € {{ number_format($contributie->bedrag, 2, ',', '.') }}</li>
        <li class="list-group-item"><strong>Boekjaar:</strong> {{ $contributie->boekjaar->jaar ?? '-' }}</li>
    </ul>

    <a href="{{ route('contributies.edit', $contributie->id) }}" class="btn btn-warning">Bewerken</a>
    <a href="{{ route('contributies.index') }}" class="btn btn-secondary">Terug</a>
@endsection
