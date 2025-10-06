@extends('layouts.app')

@section('content')
    <h1>Familielid bewerken</h1>

    <form action="{{ route('familieleden.update', $familielid->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" name="naam" value="{{ $familielid->naam }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="geboortedatum" class="form-label">Geboortedatum</label>
            <input type="date" name="geboortedatum" value="{{ $familielid->geboortedatum }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="familie_id" class="form-label">Familie</label>
            <select name="familie_id" class="form-select" required>
                @foreach ($families as $familie)
                    <option value="{{ $familie->id }}" @if ($familie->id == $familielid->familie_id) selected @endif>
                        {{ $familie->naam }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="soort_lid_id" class="form-label">Soort lid</label>
            <select name="soort_lid_id" class="form-select" required>
                @foreach ($soortenLeden as $soort)
                    <option value="{{ $soort->id }}" @if ($soort->id == $familielid->soort_lid_id) selected @endif>
                        {{ $soort->omschrijving }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Bijwerken</button>
    </form>
@endsection
