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
        class="mb-8 flex flex-col sm:flex-row sm:items-center sm:gap-2 justify-end w-full gap-3">
        @csrf
        <div class="w-full lg:w-1/3 flex flex-row">
            <input type="text" name="query" value="{{ old('query', $query ?? '') }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Cari pasal...">
            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition font-semibold cursor-pointer ml-2 sm:ml-0 w-auto">
                Cari
            </button>
        </div>
    </form>

    <div class="mb-8">
        {{ $results->links() }}
    </div>
    @if(isset($metrics))
    <div class="mt-6 bg-white shadow rounded-lg p-4 mb-8">
        <h3 class="text-lg font-bold mb-2">Evaluasi Pencarian</h3>
        <div class="grid grid-cols-2 gap-4 text-sm">
            <div>
                <p>✅ TP: <strong>{{ $metrics['tp'] }}</strong></p>
                <p>❌ FP: <strong>{{ $metrics['fp'] }}</strong></p>
                <p>🔎 FN: <strong>{{ $metrics['fn'] }}</strong></p>
                <p>✅ TN: <strong>{{ $metrics['tn'] }}</strong></p>
            </div>
            <div>
                <p>📊 Precision: <strong>{{ $metrics['precision'] }}</strong></p>
                <p>📈 Recall: <strong>{{ $metrics['recall'] }}</strong></p>
                <p>📈 F1-Score: <strong>{{ $metrics['f1_score'] }}</strong></p>
            </div>
        </div>
    </div>
    @endif
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($results as $pasal)
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
                    @if(isset($pasal->similarity))
                    <div class="text-sm text-gray-500 mb-2">
                        <span class="font-semibold">Similarity:</span>
                        <span class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded">
                            {{ number_format($pasal->similarity * 100) }}%
                        </span>
                    </div>
                    @endif
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811V8.69ZM12.75 8.689c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061a1.125 1.125 0 0 1-1.683-.977V8.69Z" />
                        </svg>
                    </span>
                </div>
            </a>
        </div>
        @empty
        <p class="text-center text-gray-600 col-span-3">Tidak ada pasal ditemukan.</p>
        @endforelse
    </div>
</div>
@endsection