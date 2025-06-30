@extends('admin.layouts.app')

@section('content')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    {{-- <x-breadcrumb :breadcrumbs="$breadcrumbs"></x-breadcrumb> --}}
    <div class="flex flex-wrap w-full my-5 -mx-2">
        <div class="w-full md:w-1/2 lg:w-1/2 p-2">
            <a href="#">
                <div
                    class="flex items-center flex-row w-full hover:shadow hover:bg-blue-500 bg-blue-600 rounded-md p-3">
                    <div
                        class="flex text-blue-600 items-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="object-scale-down transition duration-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total Buku KUHP
                        </div>
                        <div>
                            {{ $TotalBuku }}
                        </div>
                    </div>
                    <div class=" flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/2 p-2">
            <a href="#">
                <div
                    class="flex items-center flex-row w-full hover:shadow hover:bg-blue-500 bg-blue-600 rounded-md p-3">
                    <div
                        class="flex text-blue-600 items-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                            stroke="currentColor" class="object-scale-down transition duration-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total BAB KUHP
                        </div>
                        <div>
                            {{ $TotalBAB }}
                        </div>
                    </div>
                    <div class=" flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/2 p-2">
            <a href="#">
                <div
                    class="flex items-center flex-row w-full hover:shadow hover:bg-blue-500 bg-blue-600 rounded-md p-3">
                    <div
                        class="flex text-blue-600 items-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2"
                            stroke="currentColor" class="object-scale-down transition duration-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total Pasal KUHP
                        </div>
                        <div>
                            {{ $TotalPasal }}
                        </div>
                    </div>
                    <div class=" flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/2 p-2">
            <a href="#">
                <div
                    class="flex items-center flex-row w-full hover:shadow hover:bg-blue-500 bg-blue-600 rounded-md p-3">
                    <div
                        class="flex text-blue-600 items-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg viewBox="0 0 512 512" class="object-scale-down transition duration-500" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total Pencarian Pasal (Query)
                        </div>
                        <div>
                            {{ $TotalQuery }}
                        </div>
                    </div>
                    <div class=" flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" class="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="flex flex-wrap w-full my-5 -mx-2">
        <!-- Statistik Peminjaman Buku -->
        <div class="w-full">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Statistik Pencarian</h3>
                <canvas id="userChart" height="200" width="400"></canvas>
            </div>
        </div>
    </div>

    <div class="bg-white mt-6 rounded-lg shadow p-4">
        <h3 class="text-lg font-bold mb-4">Aktivitas Terbaru</h3>
        <ul class="divide-y">
            {{-- @foreach ($recentActivities as $activity) --}}
            <li class="flex items-center justify-between py-2 border-b">
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full"
                        src="https://ui-avatars.com/api/?name=# }}&background=0D8ABC&color=fff" alt="User Avatar">
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-800">#</p>
                        <p class="text-xs text-gray-500">#</p>
                    </div>
                </div>
                <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">Konsultasi</span>
            </li>
            {{-- @endforeach --}}
        </ul>
    </div>
</div>

@endsection