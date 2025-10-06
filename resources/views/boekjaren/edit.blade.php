@extends('layouts.app')

@section('content')
    <h1>Boekjaar bewerken</h1>

    <form action="{{ route('boekjaren.update', $boekjaar->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Jaar</label>
            <input type="number" name="jaar" value="{{ $boekjaar->jaar }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Bijwerken</button>
    </form>
@endsection
