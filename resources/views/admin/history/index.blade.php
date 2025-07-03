@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">History pencarian Pasal</h2>
        </div>
        {{-- Massage --}}
        @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            <p>{{ session('success')}}</p>
        </div>
        @endif
        @if(session('info'))
        <div class="bg-yellow-500 text-white p-3 rounded mb-4">
            {{ session('info') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
            <p>{{ session('error')}}</p>
        </div>
        @endif
        <div class="w-full p-2 mb-12">
            <div class="flex items-center flex-row w-full shadow-lg bg-white rounded-md p-3">
                <div class="flex flex-col justify-around flex-grow p-5 text-gray-800">
                    <div class="flex justify-between mb-5">
                        <h1 class="whitespace-nowrap font-bold text-2xl text-gray-800">Data History Pencarian</h1>
                    </div>
                    <div class="overflow-x-auto mb-4">
                        <table class="min-w-full bg-white">
                            <thead class="text-gray-700">
                                <tr class="border-b">
                                    <th class="text-left py-5 px-6 font-semibold text-gray-600">No</th>
                                    <th class="text-left py-5 px-6 font-semibold text-gray-600">Query</th>
                                    <th class="text-left py-5 px-6 font-semibold text-gray-600">Tanggal Pencarian</th>
                                    <th class="text-left py-5 px-6 font-semibold text-gray-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($DataHistory as $history)
                                <tr class="border-b">
                                    <td class="py-5 px-6">{{ (($DataHistory->currentPage() - 1) *
                                        $DataHistory->perPage()) +
                                        $loop->iteration }}</td>
                                    <td class="py-5 px-6">{{ Str::limit(strip_tags($history->user_input), 200, '...') }}
                                    <td class="py-5 px-6">{{ $history->created_at->format('d-m-y H:i:s') }}
                                    </td>
                                    <td class="py-5 px-6">
                                        <div class="flex space-x-2">
                                            <form action="{{ route('admin.history.destroy', $history) }}" method="POST"
                                                class="inline-block ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <div class="relative before:content-[attr(data-tip)] before:absolute before:px-2 before:py-1 before:left-1/2 before:-top-3 before:w-max before:max-w-xs before:-translate-x-1/2 before:-translate-y-full before:bg-gray-700 before:text-white before:rounded-md before:opacity-0 before:transition-all after:absolute after:left-1/2 after:-top-3 after:h-0 after:w-0 after:-translate-x-1/2 after:border-8 after:border-t-gray-700 after:border-l-transparent after:border-b-transparent after:border-r-transparent after:opacity-0 after:transition-all hover:before:opacity-100 hover:after:opacity-100"
                                                    data-tip="Delete History">
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data History ini?')"
                                                        class="cursor-pointer flex items-center justify-center w-8 h-8 text-white transition-colors duration-150 rounded-full bg-red-600 hover:bg-red-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5 fill-current">
                                                            <path fill-rule="evenodd"
                                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $DataHistory->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection