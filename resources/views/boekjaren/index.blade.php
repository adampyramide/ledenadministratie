@extends('layouts.app')

@section('content')
    <h1>Boekjaren</h1>

    <a href="{{ route('boekjaren.create') }}" class="btn btn-primary mb-3">Nieuw boekjaar toevoegen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Jaar</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boekjaren as $boekjaar)
                <tr>
                    <td>{{ $boekjaar->jaar }}</td>
                    <td>
                        <a href="{{ route('boekjaren.show', $boekjaar->id) }}" class="btn btn-info btn-sm">Bekijken</a>
                        <a href="{{ route('boekjaren.edit', $boekjaar->id) }}" class="btn btn-warning btn-sm">Bewerken</a>
                        <form action="{{ route('boekjaren.destroy', $boekjaar->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
