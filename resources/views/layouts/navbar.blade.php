<!-- Navbar -->
<nav class="bg-red-900 text-white p-4 lg:px-16 shadow sticky top-0 z-50">
    <div class="flex items-center justify-between flex-wrap">
        <div class="flex items-center flex-shrink-0 text-white">
            <a href="{{ route('home') }}" class="font-semibold text-xl tracking-tight">Sistem Pencarian Pasal KUHP</a>
        </div>

        <div class="w-full hidden lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="{{ route('tentang') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-red-100 hover:text-white mr-4">
                    Tentang
                </a>
                <a href="{{ route('cara-pakai') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-red-100 hover:text-white mr-4">
                    Cara Penggunaan
                </a>
                <a href="{{ route('kontak') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-red-100 hover:text-white">
                    Kontak
                </a>
            </div>
        </div>

        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-red-100 border-red-200 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
    </div>
</nav>