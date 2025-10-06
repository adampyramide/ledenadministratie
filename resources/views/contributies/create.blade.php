@extends('layouts.app')

@section('content')
    <h1>Nieuwe contributie toevoegen</h1>

    <form action="{{ route('contributies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Leeftijd</label>
            <input type="number" name="leeftijd" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Soort lid</label>
            <select name="soort_lid_id" class="form-select" required>
                @foreach ($soortenLeden as $soort)
                    <option value="{{ $soort->id }}">{{ $soort->omschrijving }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Bedrag (€)</label>
            <input type="number" step="0.01" name="bedrag" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Boekjaar</label>
            <select name="boekjaar_id" class="form-select" required>
                @foreach ($boekjaren as $boekjaar)
                    <option value="{{ $boekjaar->id }}">{{ $boekjaar->jaar }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
@endsection
