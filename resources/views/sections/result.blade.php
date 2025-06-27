@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6 space-y-10">
    <!-- TABEL 1: PASAL & QUERY -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">1. Data Pasal & Query</h2>
        <table class="min-w-full border text-sm divide-y divide-gray-200 mb-6">
            <thead class="bg-red-800 text-white divide-y divide-gray-600">
                <tr>
                    <th class="border p-3 font-semibold text-center text-lg">Query</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border p-3 text-center text-2xl">{{ $query }}</td>
                </tr>
            </tbody>
        </table>
        <table class="min-w-full border text-sm divide-y divide-gray-200">
            <thead class="bg-red-800 text-white divide-y divide-gray-600">
                <tr>
                    <th class="border p-3 font-semibold text-center">No</th>
                    <th class="border p-3 font-semibold">Buku</th>
                    <th class="border p-3 font-semibold">Bab</th>
                    <th class="border p-3 font-semibold">Pasal</th>
                    <th class="border p-3 font-semibold">Isi Pasal</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach($documentsPasal as $index => $doc)
                <tr class="hover:bg-blue-50 transition">
                    <td class="border p-3 text-center">{{ $index + 1 }}</td>
                    <td class="border p-3">{{ $doc['buku'] }}</td>
                    <td class="border p-3 text-center">{{ $doc['bab'] }}</td>
                    <td class="border p-3">{{ $doc['pasal'] }}</td>
                    <td class="border p-3 whitespace-pre-line">{{ $doc['isi'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{--
    <!-- TABEL: TOKENS PER PASAL -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">Tokens per Pasal</h2>
        <table class="min-w-full border text-sm divide-y divide-gray-200">
            <thead class="bg-green-800 text-white divide-y divide-gray-600">
                <tr>
                    <th class="border p-3 font-semibold text-center">No</th>
                    <th class="border p-3 font-semibold">Pasal</th>
                    <th class="border p-3 font-semibold">Tokens</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach($documents as $index => $document)
                <tr class="hover:bg-green-50 transition">
                    <td class="border p-3 text-center">{{ $index + 1 }}</td>
                    <td class="border p-3">{{ $document['pasal'] }}</td>
                    <td class="border p-3">
                        {{ implode(', ', $document['tokens']) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}


    <!-- TABEL 2: HASIL PREPROCESSING PASAL -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">2. Term Frequency(TF) dan Inverse Document Frequency(IDF)</h2>
        <table class="min-w-full border text-sm divide-y divide-gray-200">
            <thead class="bg-red-800 text-white divide-y divide-gray-600">
                <tr>
                    <th class="border p-3 font-semibold text-left">Kata</th>
                    @foreach($documents as $document)
                    <th class="border p-3 font-semibold text-center">{{ $document['pasal'] }}</th>
                    @endforeach
                    <th class="border p-3 font-semibold text-center">IDF</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @php
                // Mengumpulkan semua kata unik dari semua dokumen
                $allTerms = collect();
                foreach ($documents as $document) {
                $allTerms = $allTerms->merge(array_keys($document['tf']));
                }
                $allTerms = $allTerms->unique();
                @endphp

                @foreach($allTerms as $term)
                <tr class="hover:bg-blue-50 transition">
                    <td class="border p-3 font-medium">{{ $term }}</td>
                    @foreach($documents as $document)
                    <td class="border p-3 text-center">
                        {{ $document['tf'][$term] ?? 0 }}
                    </td>
                    @endforeach
                    <!-- Menambahkan Kolom IDF -->
                    <td class="border p-3 text-center">
                        {{ $idf[$term] ?? 0 }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="bg-white shadow rounded-lg p-6 overflow-x-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">2. Term Frequency</h2>
        <table class="min-w-full border text-sm divide-y divide-gray-200">
            <thead class="bg-purple-800 text-white divide-y divide-gray-600">
                <tr>
                    <th class="border p-3 font-semibold text-center">Kata</th>
                    <th class="border p-3 font-semibold text-center">Pasal ke-1</th>
                    <th class="border p-3 font-semibold text-center">Pasal ke-2</th>
                    <th class="border p-3 font-semibold text-center">Pasal ke-3</th>
                    <th class="border p-3 font-semibold text-center">Pasal ke-4</th>
                    <th class="border p-3 font-semibold text-center">Pasal ke-5</th>
                    <th class="border p-3 font-semibold text-center">IDF</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach($termFrequencies as $term => $values)
                <tr class="hover:bg-purple-50 transition">
                    <td class="border p-3">{{ $term }}</td>
                    @for($i = 0; $i < 5; $i++) <td class="border p-3 text-center">{{ $values['tf'][$i] ?? 0 }}</td>
                        @endfor
                        <td class="border p-3 text-center">
                            {{ isset($values['idf']) ? number_format($values['idf'], 6) : '-' }}
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(method_exists($termFrequencies, 'links'))
        <div class="mt-4">
            {{ $termFrequencies->links() }}
        </div>
        @endif
    </div> --}}
    {{--
    <!-- TABEL 3: TF-IDF -->
    <div class="bg-white shadow rounded-lg p-6 overflow-auto">
        <h2 class="text-2xl font-bold mb-4">3. TF-IDF</h2>
        <table class="min-w-max border text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Kata</th>
                    @foreach($headers as $docId)
                    <th class="border p-2">{{ $docId }}</th>
                    @endforeach
                    <th class="border p-2">IDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tfidf as $row)
                <tr>
                    <td class="border p-2">{{ $row['term'] }}</td>
                    @foreach($headers as $docId)
                    <td class="border p-2 text-center">{{ number_format($row[$docId] ?? 0, 6) }}</td>
                    @endforeach
                    <td class="border p-2 text-center">{{ number_format($row['idf'], 6) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
@endsection