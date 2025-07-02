@extends('admin.layouts.app')

@section('title', 'Daftar Pasal KUHP')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex flex-col w-full my-5 mx-auto">
            <!-- Breadcrumb & Title -->
            <div class="flex items-center mb-6 space-x-2 text-gray-700">
                <a href="{{ route('admin.dashboard.data') }}"
                    class="text-blue-600 hover:underline font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
                <span>/</span>
                <span class="font-semibold">Detail Pasal KUHP</span>
            </div>

            <!-- Card -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8">
                <div class="mb-6">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Detail Pasal</h1>
                    <div class="h-1 w-16 bg-blue-500 rounded"></div>
                </div>

                <!-- Detail Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow border border-gray-200">
                        <tbody>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600 w-1/4">No id</th>
                                <td class="px-6 py-4 text-gray-900 font-semibold">{{ $pasal_kuhp->id }}</td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">Buku</th>
                                <td class="px-6 py-4 text-gray-900">{{ $pasal_kuhp->bab->buku->judul ?? '—' }}</td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">BAB</th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $pasal_kuhp->bab->nomor_bab ?? '' }} {{ $pasal_kuhp->bab->label_bab ?? '' }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">Pasal</th>
                                <td class="px-6 py-4 text-gray-900 font-semibold">Pasal {{ $pasal_kuhp->nomor_pasal }}
                                </td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-left text-gray-600 align-top">Isi Pasal</th>
                                <td class="px-6 py-4 text-gray-900 whitespace-pre-line">{{ $pasal_kuhp->isi_pasal }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex flex-wrap justify-end gap-3">
                    <a href="{{ route('admin.pasal-kuhp.edit', $pasal_kuhp->id) }}"
                        class="inline-flex items-center px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a4 4 0 01-1.414.94l-4.243 1.415 1.415-4.243a4 4 0 01.94-1.414z" />
                        </svg>
                        Edit
                    </a>
                    <form action="{{ route('admin.pasal-kuhp.destroy', $pasal_kuhp->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus pasal ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2 bg-red-600 text-white rounded-lg shadow cursor-pointer hover:bg-red-700 transition font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection