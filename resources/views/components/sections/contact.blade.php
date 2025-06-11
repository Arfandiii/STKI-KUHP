<section id="kontak" class="bg-gray-50 py-12 lg:px-16 lg:h-fit lg:scroll-m-8">
    <div class="container mx-auto px-4 lg:h-full flex flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-center mb-10">Hubungi Kami</h2>
        <p class="text-gray-600 text-center mb-8">
            Punya pertanyaan atau masukan? Jangan ragu untuk menghubungi kami.
        </p>

        <div class="flex flex-wrap -mx-4 w-full">
            <div class="w-full md:w-1/2 px-4 mb-8 hidden md:block">
                <img src="{{ asset('assets/images/kuhp.jpg') }}" alt="Kontak Kami"
                    class="w-full h-full object-cover rounded-lg shadow">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-8">
                <div class="bg-white p-6 rounded-lg shadow  w-full">
                    <h3 class="text-xl font-bold mb-4">Kirim Pesan</h3>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-4 w-full">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="shadow appearance-none rounded border border-gray-200 w-full py-2 px-3 text-gray-700 leading-tight focus:border-red-900 focus:outline-none focus:shadow-outline"
                                id="name" type="text" name="name" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none rounded border border-gray-200 w-full py-2 px-3 text-gray-700 leading-tight focus:border-red-900 focus:outline-none focus:shadow-outline"
                                id="email" type="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="subject">
                                Subjek
                            </label>
                            <input
                                class="shadow appearance-none rounded border border-gray-200 w-full py-2 px-3 text-gray-700 leading-tight focus:border-red-900 focus:outline-none focus:shadow-outline"
                                id="subject" type="text" name="subject" required>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                                Pesan
                            </label>
                            <textarea
                                class="shadow appearance-none rounded border border-gray-200 w-full py-2 px-3 text-gray-700 leading-tight focus:border-red-900 focus:outline-none focus:shadow-outline"
                                id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-red-800 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>