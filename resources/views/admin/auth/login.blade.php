@extends('admin.auth.layout')
@section('title', 'Login')

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg ">

        <div>
            <h2 class="text-center text-3xl font-extrabold text-red-700">Sistem Temu Kembali Informasi</h2>
            <p class="text-center text-gray-600">Pencarian Pasal KUHP</p>
        </div>
        @if (session()->has('loginError'))
        <div class="bg-red-100 border border-red-400 text-red-800 px-4 py-3 rounded relative" role="alert">
            <p>{{ session('loginError')}}</p>
        </div>
        @endif
        @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded relative" role="alert">
            <p>{{ session('success')}}</p>
        </div>
        @endif
        <form class="mt-6 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="space-y-2">
                <div>
                    <label class="text-sm font-medium text-gray-700"> Email </label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm">
                </div>
                <div>
                    <label class="text-sm font-medium text-gray-700"> Password </label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-red-600 focus:border-red-600 focus:z-10 sm:text-sm">
                </div>
            </div>
            <div>
                <button type="submit"
                    class="cursor-pointer group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                    Masuk
                </button>
            </div>
        </form>
    </div>
</div>