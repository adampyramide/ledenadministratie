@extends('layouts.app')

@section('content')
    <h1>Soort Lid: {{ $soort->omschrijving }}</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Omschrijving:</strong> {{ $soort->omschrijving }}</li>
    </ul>

    <a href="{{ route('soorten_leden.edit', $soort->id) }}" class="btn btn-warning">Bewerken</a>
    <a href="{{ route('soorten_leden.index') }}" class="btn btn-secondary">Terug</a>
@endsection
