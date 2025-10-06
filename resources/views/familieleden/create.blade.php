@extends('layouts.app')

@section('content')
    <h1>Nieuw familielid toevoegen</h1>

    <form action="{{ route('familieleden.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" name="naam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="geboortedatum" class="form-label">Geboortedatum</label>
            <input type="date" name="geboortedatum" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="familie_id" class="form-label">Familie</label>
            <select name="familie_id" class="form-select" required>
                @foreach ($families as $familie)
                    <option value="{{ $familie->id }}">{{ $familie->naam }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="soort_lid_id" class="form-label">Soort lid</label>
            <select name="soort_lid_id" class="form-select" required>
                @foreach ($soortenLeden as $soort)
                    <option value="{{ $soort->id }}">{{ $soort->omschrijving }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
@endsection
