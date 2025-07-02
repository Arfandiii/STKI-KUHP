@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex flex-wrap w-full my-5 mx-auto">
            <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
                <a href="{{ route('admin.dashboard.data') }}" class="text-blue-600 hover:underline font-medium">&larr;
                    Kembali</a>
                <span>/</span>
                <h2 class="font-bold mb-2 text-center text-3xl">Tambah Pasal KUHP</h2>
            </div>
            <form action="{{ route('admin.pasal-kuhp.store') }}" method="POST"
                class="flex flex-col gap-4 w-full my-5 mx-auto">
                @csrf
                <div class="mb-2">
                    <label for="bab_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">                        BAB KUHP</label>
                    <select name="bab_id" id="bab_id" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">-- Pilih BAB KUHP --</option>
                        @foreach($DataBab as $bab)
                        <option value="{{ $bab->id }}" {{ old('bab_id')==$bab->id ? 'selected' : '' }}>
                            {{ $bab->nomor_bab }} - {{ $bab->label_bab }}
                        </option>
                        @endforeach
                    </select>
                    @error('bab_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nomor_pasal" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nomor
                        Pasal KUHP</label>
                    <input type="text" name="nomor_pasal" id="nomor_pasal" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan Nomor Pasal KUHP" value="{{ old('nomor_pasal') }}">
                    @error('nomor_pasal')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="isi_pasal" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Isi
                        Pasal
                        KUHP</label>
                    <textarea name="isi_pasal" id="isi_pasal" rows="5" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan Isi Pasal KUHP">{{ old('isi_pasal') }}</textarea>
                    @error('isi_pasal')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
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