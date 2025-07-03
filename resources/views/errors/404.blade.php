{{-- resources/views/errors/404.blade.php --}}
@extends('errors.app')

@section('content')
<div class="container w-full md:max-w-3xl mx-auto pt-20">
    <div class="w-full px-4 md:px-6 text-xl text-center text-gray-800 leading-normal">
        <div class="font-sans break-normal items-center px-4 py-6 sm:px-10 sm:py-16">
            <div class="text-center">
                <!-- Floating Icon -->
                <i class="fas fa-exclamation-circle text-red-500 text-7xl opacity-10 mx-auto mb-6"></i>

                <!-- Error Box -->
                <div class="bg-white shadow-xl rounded-lg p-6 text-center max-w-2xl mx-auto">
                    <!-- Error Code -->
                    <h1 class="text-red-600 text-8xl font-bold mb-3">404</h1>

                    <!-- Error Message -->
                    <h2 class="text-gray-700 text-4xl font-semibold mb-4">Oops! Halaman Tidak Ditemukan</h2>

                    <!-- Error Description -->
                    <p class="text-gray-500 mb-6 text-base">
                        Halaman yang Anda cari mungkin telah dihapus, namanya diubah, atau tidak tersedia untuk saat
                        ini.
                    </p>

                    <!-- Back to Home Button -->
                    <a href="{{ url('/') }}"
                        class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-500 focus:outline-none focus:ring-1 focus:ring-green-500">
                        <i class="fas fa-home mr-2"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection