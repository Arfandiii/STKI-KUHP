@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6 space-y-10">
    <!-- TABEL 1: PASAL & QUERY -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">1. Data Pasal & Query</h2>
        <div class="overflow-x-auto">
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
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200 mt-6">
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
        </div>
    </div>


    <!-- TABEL: TOKENS-->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">2. Tokens per Pasal</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white divide-y divide-gray-600">
                    <tr>
                        <th class="border p-3 font-semibold text-center">No</th>
                        <th class="border p-3 font-semibold">Data</th>
                        <th class="border p-3 font-semibold">Tokens</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($documents as $index => $doc)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-3 text-center">{{ $index + 1 }}</td>
                        <td class="border p-3">
                            Buku: {{ $documentsPasal[$index]['buku'] }} <br>
                            Bab: {{ $documentsPasal[$index]['bab'] }} <br>
                            Pasal: {{ $documentsPasal[$index]['pasal'] }} <br>
                            {{ $documentsPasal[$index]['isi'] }}
                        </td>
                        <td class="border p-3">
                            {{ implode(', ', $doc['tokens']) }}
                        </td>
                    </tr>
                    @endforeach

                    <!-- Tambahan untuk Query -->
                    <tr class="hover:bg-blue-50 transition bg-yellow-100 font-semibold">
                        <td class="border p-3 text-center">Q</td>
                        <td class="border p-3">Query: {{ $query }}</td>
                        <td class="border p-3">{{ implode(', ', $preprocessedQuery) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- TABEL: TF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">3. Term Frequency (TF)</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfTable as $row)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- TABEL: TF Weight -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">4. Term Frequency Weight (TF Weight)</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfWeightTable as $row)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- TABEL: DF & IDF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">5. Document Frequency (DF) dan Inverse Document Frequency (IDF)</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        <th class="border p-2 font-semibold text-center">DF</th>
                        <th class="border p-2 font-semibold text-center">IDF</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($idfTable as $row)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        <td class="border p-2 text-center">{{ $row['df'] }}</td>
                        <td class="border p-2 text-center">{{ $row['idf'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- TABEL: TF-IDF -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">6. TF-IDF</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Term</th>
                        @for ($i = 1; $i <= count($documents); $i++) <th class="border p-2 font-semibold text-center">
                            D{{ $i
                            }}
                            </th>
                            @endfor
                            <th class="border p-2 font-semibold text-center">Query</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tfidfTable as $row)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-2 text-center">{{ $row['term'] }}</td>
                        @for ($i = 1; $i <= count($documents); $i++) <td class="border p-2 text-center">{{ $row['D' .
                            $i] }}
                            </td>
                            @endfor
                            <td class="border p-2 text-center">{{ $row['Q'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- TABEL: Cosine Similarity -->
    <div class="bg-white shadow rounded-lg p-6 mt-10 overflow-x-auto">
        <h2 class="text-2xl font-bold mb-4">7. Cosine Similarity</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full border text-sm divide-y divide-gray-200">
                <thead class="bg-red-800 text-white">
                    <tr>
                        <th class="border p-2 font-semibold text-center">Dokumen</th>
                        <th class="border p-2 font-semibold text-center">Cosine Similarity</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($cosineSimilarities as $sim)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="border p-2 text-center">{{ $sim['doc'] }}</td>
                        <td class="border p-2 text-center">{{ $sim['similarity'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection