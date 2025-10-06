@extends('layouts.app')

@section('content')
    <h1>Soort lid bewerken</h1>

    <form action="{{ route('soorten_leden.update', $soort->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="omschrijving" class="form-label">Omschrijving</label>
            <input type="text" name="omschrijving" value="{{ $soort->omschrijving }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Bijwerken</button>
    </form>
@endsection
