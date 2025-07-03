@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Data KUHP</h2>
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
        <!-- Filter Section -->
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Pilih Tabel untuk Ditampilkan</h2>
        <form method="GET" action="{{ route('admin.dashboard.data') }}" class="flex space-x-4">
            <select name="filter" id="filter"
                class="p-2 bg-white border shadow-sm border-slate-300  focus:outline-none rounded-md sm:text-sm focus:ring-1">
                <option value="all" {{ request('filter')==='all' ? 'selected' : '' }}>Tampilkan Semua</option>
                <option value="dataBuku" {{ request('filter')==='dataBuku' ? 'selected' : '' }}>Data Buku KUHP
                </option>
                <option value="dataBab" {{ request('filter')==='dataBab' ? 'selected' : '' }}>Data BAB KUHP
                </option>
                <option value="dataPasal" {{ request('filter')==='dataPasal' ? 'selected' : '' }}>Data Pasal KUHP
                </option>
            </select>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 cursor-pointer">Terapkan
                Filter</button>
        </form>
        <div class="flex flex-wrap w-full my-5 mx-auto">
            @include('admin.data.buku.index')
            @include('admin.data.bab.index')
            @include('admin.data.pasal.index')
        </div>
    </div>
</div>
@endsection