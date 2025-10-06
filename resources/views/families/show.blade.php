@extends('layouts.app')

@section('content')
    <h1>Familie: {{ $familie->naam }}</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Naam:</strong> {{ $familie->naam }}</li>
        <li class="list-group-item"><strong>Adres:</strong> {{ $familie->adres }}</li>
    </ul>

    <a href="{{ route('families.edit', $familie->id) }}" class="btn btn-warning">Bewerken</a>
    <a href="{{ route('families.index') }}" class="btn btn-secondary">Terug</a>
@endsection
