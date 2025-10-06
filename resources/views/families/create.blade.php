@extends('layouts.app')

@section('content')
    <h1>Nieuwe familie toevoegen</h1>

    <form action="{{ route('families.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" name="naam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="adres" class="form-label">Adres</label>
            <input type="text" name="adres" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
@endsection
