<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencarian Pasal KUHP</title>
    <!-- Import Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body class="'bg-gray-100')">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>

</html>