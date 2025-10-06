@extends('layouts.app')

@section('content')
    <h1>Families</h1>

    <a href="{{ route('families.create') }}" class="btn btn-primary mb-3">Nieuwe familie toevoegen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($families as $familie)
                <tr>
                    <td>{{ $familie->naam }}</td>
                    <td>{{ $familie->adres }}</td>
                    <td>
                        <a href="{{ route('families.show', $familie->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                        <a href="{{ route('families.edit', $familie->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                        <form action="{{ route('families.destroy', $familie->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
