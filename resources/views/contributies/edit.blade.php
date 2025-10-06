@extends('layouts.app')

@section('content')
    <h1>Contributie bewerken</h1>

    <form action="{{ route('contributies.update', $contributie->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Leeftijd</label>
            <input type="number" name="leeftijd" value="{{ $contributie->leeftijd }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Soort lid</label>
            <select name="soort_lid_id" class="form-select" required>
                @foreach ($soortenLeden as $soort)
                    <option value="{{ $soort->id }}" @if($contributie->soort_lid_id == $soort->id) selected @endif>
                        {{ $soort->omschrijving }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Bedrag (€)</label>
            <input type="number" step="0.01" name="bedrag" value="{{ $contributie->bedrag }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Boekjaar</label>
            <select name="boekjaar_id" class="form-select" required>
                @foreach ($boekjaren as $boekjaar)
                    <option value="{{ $boekjaar->id }}" @if($contributie->boekjaar_id == $boekjaar->id) selected @endif>
                        {{ $boekjaar->jaar }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Bijwerken</button>
    </form>
@endsection
