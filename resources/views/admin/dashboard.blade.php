@extends('admin.layouts.app')

@section('content')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="flex flex-wrap w-full my-5 -mx-2">
        <div class="w-full md:w-1/2 lg:w-1/2 p-2">
            <a href="{{ route('admin.dashboard.data') }}">
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
            <a href="{{ route('admin.dashboard.data') }}">
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
            <a href="{{ route('admin.dashboard.data') }}">
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
            <a href="{{ route('admin.history.index') }}">
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
        <!-- Statistik pencarian pasal -->
        <div class="w-full">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Statistik Pencarian</h3>
                <canvas id="historyChart" height="200" width="400"></canvas>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('historyChart').getContext('2d');
        
        const historyChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($days),
                datasets: [{
                    label: 'Jumlah Aktivitas',
                    data: @json($dailyHistories),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 12
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12,
                                maxRotation: 0
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `Aktivitas: ${context.parsed.y}`;
                            }
                        }
                    }
                }
            }
        });
    });
</script>
@endsection