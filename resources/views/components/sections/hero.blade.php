<section id="home" class="py-12 lg:px-16 lg:h-screen lg:scroll-m-8 -mt-8 border-b-1 border-gray-200">
    <div class="container mx-auto px-4 lg:h-full flex flex-col items-center justify-center">
        <div class="text-center">
            <h1 class="my-4 text-4xl font-bold leading-tight text-white lg:text-5xl">
                Temukan Pasal KUHP secara Cepat dan Akurat
            </h1>
            <p class="mb-8 text-white">
                Sistem canggih untuk pencarian pasal Kitab Undang-Undang Hukum Pidana (KUHP) berbasis teknologi
                informasi
            </p>
            <div class="w-full max-w-lg text-center align-center mx-auto">
                <form action="/search" method="GET">
                    <div class="flex items-center">
                        <input
                            class="flex-shrink w-full border border-gray-200 focus:border-red-900 focus:outline-none rounded-lg p-3 bg-white"
                            type="text" name="query" placeholder="Masukkan kata kunci..." required>
                        <button
                            class="bg-red-800 text-white border-red-800 border rounded-lg px-4 py-3 ml-2 hover:bg-red-700"
                            type="submit">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>