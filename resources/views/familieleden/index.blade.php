@extends('layouts.app')

@section('content')
    <h1>Familieleden</h1>

    <a href="{{ route('familieleden.create') }}" class="btn btn-primary mb-3">Nieuw familielid toevoegen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Geboortedatum</th>
                <th>Familie</th>
                <th>Soort lid</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familieleden as $lid)
                <tr>
                    <td>{{ $lid->naam }}</td>
                    <td>{{ $lid->geboortedatum }}</td>
                    <td>{{ $lid->familie->naam ?? 'Onbekend' }}</td>
                    <td>{{ $lid->soortLid->omschrijving ?? 'Onbekend' }}</td>
                    <td>
                        <a href="{{ route('familieleden.show', $lid->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                        <a href="{{ route('familieleden.edit', $lid->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                        <form action="{{ route('familieleden.destroy', $lid->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
