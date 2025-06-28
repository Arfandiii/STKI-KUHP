@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">📚 Daftar Pasal</h1>

    @if (session('error'))
    <div class="mb-4 text-red-600 bg-red-100 border border-red-200 rounded-lg px-4 py-3">
        {{ session('error') }}
    </div>
    @endif
    <form action="{{ route('pasal.process') }}" method="POST"
        class="mb-8 flex flex-col sm:flex-row items-center gap-4 justify-end">
        @csrf
        <input type="text" name="query" value="{{ old('query', $query ?? '') }}" class=" w-full sm:w-80 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2
            focus:ring-blue-500" placeholder="Cari pasal...">
        <button type="submit"
            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold cursor-pointer">
            Cari
        </button>
    </form>

    <div class="mb-8">
        {{ $results->links() }}
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($results as $index => $pasal)
        <div
            class="bg-white rounded-2xl shadow hover:shadow-xl transition duration-300 overflow-hidden border border-gray-100">
            <a href="{{ route('pasal.show', $pasal->id) }}" class="flex flex-col h-full">
                <div class="p-6 flex-1 flex flex-col">
                    <div class="text-sm text-gray-500 mb-1">
                        <span class="uppercase font-semibold">Buku:</span> {{ $pasal->bab->buku->judul ?? '-' }}
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        <span class="uppercase font-semibold">Bab:</span>
                        {{ $pasal->bab->nomor_bab ?? '-' }} {{ $pasal->bab->label_bab ?? '-' }}
                    </div>
                    <h2 class="text-xl font-bold text-blue-700 mb-2 transition duration-200 group-hover:text-blue-800">
                        Pasal {{ $pasal->nomor_pasal }}
                    </h2>
                    <p class="text-gray-700 text-sm text-justify line-clamp-6">
                        {{ Str::limit(strip_tags($pasal->isi_pasal), 250) }}
                    </p>
                </div>
                <div class="flex items-center justify-center bg-blue-50 hover:bg-blue-100 transition px-6 py-3">
                    <span class="flex items-center gap-2 text-blue-700 font-semibold text-sm">
                        Lihat Selengkapnya
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
                        </svg>
                    </span>
                </div>
            </a>
        </div>
        @empty
        <div class="col-span-full text-center py-12 text-gray-400 text-lg">Pasal tidak ditemukan.</div>
        @endforelse
    </div>
</div>
@endsection