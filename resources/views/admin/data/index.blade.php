@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex flex-wrap w-full my-5 mx-auto">
            <div class="w-full md:w-1/2 lg:w-1/2 p-2">
                <div class="flex items-center flex-row w-full shadow-lg bg-white rounded-md p-3">
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total Buku
                        </div>
                        <div>
                            tabel buku disini
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/2 p-2">
                <div class="flex items-center flex-row w-ful shadow-lg bg-white rounded-md p-3">
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total BAB
                        </div>
                        <div>
                            Tabel BAB
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2">
                <div class="flex items-center flex-row w-ful shadow-lg bg-white rounded-md p-3">
                    <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class="whitespace-nowrap">
                            Total Pasal
                        </div>
                        <div>
                            Tabel Pasal
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection