@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">
    {{-- Breadcrumb / Back Link --}}
    <div class="mb-6 flex items-center text-sm text-gray-500 space-x-2">
        <a href="{{ route('pasal.index') }}" class="text-blue-600 hover:underline font-medium">&larr; Kembali</a>
        <span>/</span>
        <span class="text-gray-700">Detail Pasal</span>
    </div>

    {{-- Title --}}
    <h1 class="text-4xl font-extrabold text-gray-800 mb-2">{{ $pasal->nomor_pasal }}</h1>

    {{-- Subtitle --}}
    <div class="text-sm text-gray-500 mb-6">
        <span>Buku:</span> <strong>{{ $pasal->bab->buku->judul ?? '-' }}</strong> &nbsp;|&nbsp;
        <span>Bab:</span> <strong>{{ $pasal->bab->nomor_bab ?? '-' }} {{ $pasal->bab->label_bab ?? '-' }}</strong>
    </div>

    {{-- Pasal Content --}}
    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">
        @php
        // Deteksi isi pasal apakah memiliki pola "1." atau "(1)"
        $isi = trim($pasal->isi_pasal);

        if (preg_match('/\(\d+\)/', $isi)) {
        // Format seperti (1), (2)
        $parts = preg_split('/(?=\(\d+\))/', $isi, -1, PREG_SPLIT_NO_EMPTY);
        } elseif (preg_match('/\d+\.\s/', $isi)) {
        // Format seperti 1. 2. (hapus penomoran agar tidak dobel)
        $pattern = '/\d+\.\s/';
        $parts = preg_split('/(?=\d+\.\s)/', $isi, -1, PREG_SPLIT_NO_EMPTY);
        $parts = array_map(function ($p) use ($pattern) {
        return preg_replace($pattern, '', $p, 1); // hapus penomoran pertama saja
        }, $parts);
        } else {
        // Tidak bisa dipisah
        $parts = [$isi];
        }
        @endphp

        <div class="text-gray-800 leading-relaxed text-justify space-y-4">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Isi Pasal:</h2>

            @if (count($parts) > 1)
            {{-- Jika item terpecah --}}
            @if (!preg_match('/^(\(\d+\)|\d+\.\s)/', $parts[0]))
            <p>{{ trim(array_shift($parts)) }}</p> {{-- kalimat pembuka --}}
            @endif
            <ol class="list-decimal list-inside space-y-2">
                @foreach ($parts as $item)
                <li>{{ trim($item) }}</li>
                @endforeach
            </ol>
            @else
            <p>{{ $parts[0] }}</p>
            @endif
        </div>
    </div>
</div>
@endsection