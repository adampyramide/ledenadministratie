@extends('layouts.app')

@section('content')
    <h1>Boekjaar: {{ $boekjaar->jaar }}</h1>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Jaar:</strong> {{ $boekjaar->jaar }}</li>
    </ul>

    <a href="{{ route('boekjaren.edit', $boekjaar->id) }}" class="btn btn-warning">Bewerken</a>
    <a href="{{ route('boekjaren.index') }}" class="btn btn-secondary">Terug</a>
@endsection
