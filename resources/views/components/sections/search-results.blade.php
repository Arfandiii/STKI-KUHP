@extends('components.layouts.master')

@section('title', 'Hasil Pencarian - Sistem Pencarian Pasal KUHP')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6">Hasil Pencarian untuk: {{ $query }}</h1>
        
        @if(count($results) > 0)
            <ul>
                @foreach($results as $result)
                    <li class="bg-white p-4 mb-4 rounded-lg shadow">
                        <a href="{{ $result['url'] }}" class="text-blue-700 hover:text-blue-600">{{ $result['title'] }}</a>
                        <p class="text-gray-600 mt-2">{{ Str::limit($result['excerpt'], 150) }}</p>
                        <p class="text-gray-500 mt-2">Relevansi: {{ number_format($result['score'], 2) }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="bg-white p-4 rounded-lg shadow">
                <p class="text-gray-600">Tidak ditemukan hasil yang sesuai dengan kata kunci <strong>{{ $query }}</strong>.</p>
                <p class="text-gray-600 mt-2">Coba gunakan kata kunci lain atau periksa ejaan kata kunci Anda.</p>
            </div>
        @endif
    </div>
@endsection