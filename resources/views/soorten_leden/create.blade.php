@extends('layouts.app')

@section('content')
    <h1>Nieuwe soort lid toevoegen</h1>

    <form action="{{ route('soorten_leden.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="omschrijving" class="form-label">Omschrijving</label>
            <input type="text" name="omschrijving" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
@endsection
