<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>UTS Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- optional: link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white p-3">
        <div class="container">
            <h1>Halaman UTS</h1>
            <nav>
                <a class="text-white me-2" href="{{ route('uts.index') }}">Home</a>
                <a class="text-white me-2" href="{{ route('uts.pemrograman_web') }}">Menu UTS Pemrograman Web</a>
                <a class="text-white" href="{{ route('uts.database') }}">Menu UTS Database</a>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3">
        <div class="container">
            &copy; {{ date('Y') }} - Sistem UTS
        </div>
    </footer>

    <!-- optional bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
