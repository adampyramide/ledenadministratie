<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>

    <!-- Bootstrap 5 via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Mijn Project</a>
            <div>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('families.index') }}">Families</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('familieleden.index') }}">Familieleden</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('soorten_leden.index') }}">Soorten Leden</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contributies.index') }}">Contributies</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('boekjaren.index') }}">Boekjaren</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <!-- Bootstrap JS (voor dropdowns etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
