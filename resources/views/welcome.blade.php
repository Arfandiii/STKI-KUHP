<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencarian Pasal KUHP</title>
    <!-- Import Tailwind CSS -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Background Image for Large Screens -->
    <div class="fixed inset-0 -z-50 bg-cover bg-center block blur-[4px]"
        style="background-image: url('assets/images/kuhp.jpg'); opacity: 0.9;">
    </div>
    <div class="fixed inset-0 -z-50 block bg-[#1a0000] opacity-70 ">
    </div>

    

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    @include('sections.hero')

    <!-- Features Section -->
    @include('sections.features')

    <!-- How to Use Section -->
    @include('sections.how-to-use')

    <!-- Testimonial Section -->
    {{-- @include('sections.testimonials') --}}

    <!-- Contact Section -->
    @include('sections.contact')

    <!-- Footer -->
    @include('layouts.footer')

</body>

</html>