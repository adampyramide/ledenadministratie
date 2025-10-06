@extends('layouts.app')

@section('content')
    <h1>Nieuw boekjaar toevoegen</h1>

    <form action="{{ route('boekjaren.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Jaar</label>
            <input type="number" name="jaar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Opslaan</button>
    </form>
@endsection
