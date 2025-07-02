@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex flex-wrap w-full my-5 mx-auto">
            <h2 class="font-bold mb-2 text-center text-3xl">Tambah BAB KUHP</h2>
            <form action="{{ route('admin.bab-kuhp.store') }}" method="POST"
                class="flex flex-col gap-4 w-full my-5 mx-auto">
                @csrf
                <div class="mb-2">
                    <label for="buku_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pilih Buku
                        KUHP</label>
                    <select name="buku_id" id="buku_id" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">-- Pilih Buku KUHP --</option>
                        @foreach($DataBuku as $buku)
                        <option value="{{ $buku->id }}" {{ old('buku_id')==$buku->id ? 'selected' : '' }}>{{
                            $buku->judul }}</option>
                        @endforeach
                    </select>
                    @error('buku_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nomor_bab" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nomor
                        BAB
                        KUHP</label>
                    <input type="text" name="nomor_bab" id="nomor_bab" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan Nomor BAB KUHP (I, II, III, ...)" value="{{ old('nomor_bab') }}">
                    @error('nomor_bab')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="label_bab" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nama
                        BAB
                        KUHP</label>
                    <input type="text" name="label_bab" id="label_bab" required
                        class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan Label BAB KUHP" value="{{ old('label_bab') }}">
                    @error('label_bab')
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


{{-- <form action="{{ route('admin.bab-kuhp.store') }}" method="POST" class="flex flex-col gap-4 w-full my-5 mx-auto">
    @csrf
    <div class="mb-2">
        <label for="buku_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pilih Buku
            KUHP</label>
        <select name="buku_id" id="buku_id" required
            class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="">-- Pilih Buku KUHP --</option>
            @foreach($DataBuku as $buku)
            <option value="{{ $buku->id }}" {{ old('buku_id')==$buku->id ? 'selected' : '' }}>{{
                $buku->judul }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-2">
        <label for="bab_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pilih
            BAB KUHP</label>
        <select name="bab_id" id="bab_id" required
            class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="">-- Pilih BAB KUHP --</option>
            @foreach($DataBab as $bab)
            <option value="{{ $bab->id }}" {{ old('bab_id')==$bab->id ? 'selected' : '' }}>
                {{ $bab->nomor_bab }} - {{ $bab->label_bab }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-2">
        <label for="nomor" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Nomor BAB
            KUHP</label>
        <input type="text" name="nomor" id="nomor" required
            class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukkan Nomor BAB KUHP" value="{{ old('nomor') }}">
    </div>
    <div class="mb-2">
        <label for="isi" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Isi BAB
            KUHP</label>
        <textarea name="isi" id="isi" rows="5" required
            class="bg-gray-50 focus:outline-none focus:ring-1 border border-indigo-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Masukkan Isi BAB KUHP">{{ old('isi') }}</textarea>
    </div>
    @error('judul')
    <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
    <div>
        <button type="submit"
            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 cursor-pointer">Simpan</button>
    </div>
</form> --}}