@extends('layouts.app')

@section('content')
    <h1>Familielid: {{ $familielid->naam }}</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Naam:</strong> {{ $familielid->naam }}</li>
        <li class="list-group-item"><strong>Geboortedatum:</strong> {{ $familielid->geboortedatum }}</li>
        <li class="list-group-item"><strong>Familie:</strong> {{ $familielid->familie->naam ?? 'Onbekend' }}</li>
        <li class="list-group-item"><strong>Soort lid:</strong> {{ $familielid->soortLid->omschrijving ?? 'Onbekend' }}</li>
    </ul>

    <a href="{{ route('familieleden.edit', $familielid->id) }}" class="btn btn-warning">Bewerken</a>
    <a href="{{ route('familieleden.index') }}" class="btn btn-secondary">Terug</a>
@endsection
