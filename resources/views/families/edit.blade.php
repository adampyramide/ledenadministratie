@extends('layouts.app')

@section('content')
    <h1>Familie bewerken</h1>

    <form action="{{ route('families.update', $familie->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" name="naam" value="{{ $familie->naam }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="adres" class="form-label">Adres</label>
            <input type="text" name="adres" value="{{ $familie->adres }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Bijwerken</button>
    </form>
@endsection
