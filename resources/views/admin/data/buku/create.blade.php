@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex flex-wrap w-full my-5 mx-auto">
            <h2 class="font-bold mb-2 text-center text-3xl">Tambah Buku KUHP</h2>
            <form action="{{ route('admin.buku-kuhp.store') }}" method="POST"
                class="flex flex-col gap-4 w-full my-5 mx-auto">
                @csrf
                <div class="mb-2">
                    <label for="judul" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Judul
                        Buku KUHP</label>
                    <input type="text" name="judul" id="judul" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan Judul Buku KUHP" value="{{ old('judul') }}">
                </div>
                @error('judul')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 cursor-pointer">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection