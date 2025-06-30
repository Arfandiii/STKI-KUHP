<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Temu Kembali Informasi | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div
        class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]">
    </div>
    @yield('content')
</body>

</html>