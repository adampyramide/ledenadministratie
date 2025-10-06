@extends('layouts.app')

@section('content')
    <h1>Soorten Leden</h1>

    <a href="{{ route('soorten_leden.create') }}" class="btn btn-primary mb-3">Nieuwe soort lid toevoegen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Omschrijving</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($soortenLeden as $soort)
                <tr>
                    <td>{{ $soort->omschrijving }}</td>
                    <td>
                        <a href="{{ route('soorten_leden.show', $soort->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                        <a href="{{ route('soorten_leden.edit', $soort->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                        <form action="{{ route('soorten_leden.destroy', $soort->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
