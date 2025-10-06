@extends('layouts.app')

@section('content')
    <h1>Contributies</h1>

    <a href="{{ route('contributies.create') }}" class="btn btn-primary mb-3">Nieuwe contributie toevoegen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Leeftijd</th>
                <th>Soort lid</th>
                <th>Bedrag</th>
                <th>Boekjaar</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contributies as $contributie)
                <tr>
                    <td>{{ $contributie->leeftijd }}</td>
                    <td>{{ $contributie->soortLid->omschrijving ?? '-' }}</td>
                    <td>€ {{ number_format($contributie->bedrag, 2, ',', '.') }}</td>
                    <td>{{ $contributie->boekjaar->jaar ?? '-' }}</td>
                    <td>
                        <a href="{{ route('contributies.show', $contributie->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                        <a href="{{ route('contributies.edit', $contributie->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                        <form action="{{ route('contributies.destroy', $contributie->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
