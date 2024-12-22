@extends('layouts.main')

@section('content')
    <div class="w-full min-h-dvh bg-[#d9d9d9]">
        <div class="w-full mx-auto max-w-screen-xl pt-6">
            <div class="relative flex justify-end items-center mb-4">
                <!-- Search Box -->
                <div id="modal-bg" class="fixed top-0 left-0 w-0 h-0 bg-black bg-opacity-0 transition-all"></div>
                <form id="search-form" action="/kelas" method="get"
                    class="absolute top-0 left-0 z-10 w-full max-w-md bg-white shadow-md rounded-lg">
                    @csrf
                    <h2 id="search-title"
                        class="block text-gray-700 text-lg font-semibold pt-2 px-2 overflow-hidden transition-all h-0 !p-0">
                        Cari Kelas
                    </h2>
                    <div id="search-wrapper"
                        class="flex items-center bg-white rounded-md transition-all shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                        <div class="pl-2">
                            <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path class="heroicon-ui"
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </div>
                        <input id="search" type="text" placeholder="Cari kelas skaju" name="search"
                            value="{{ $search }}"
                            class="w-full rounded-md text-gray-700 leading-tight focus:outline-none p-2">
                    </div>
                    <div id="search-btn"
                        class="bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg overflow-hidden transition-all h-0 !p-0">
                        <a href="/kelas" class="hover:text-gray-600 text-gray-500 font-bold py-2 px-4">
                            Cancel
                        </a>
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-6 rounded">
                            Search
                        </button>
                    </div>
                </form>
                <div class="py-2 bg-yellow-400 hover:bg-yellow-500 rounded-md shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                    <a href="/kelas/create" class="px-3 py-2 font-medium text-white">Tambah Kelas</a>
                </div>
            </div>

            <div class="flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                <table class="w-full text-left table-auto min-w-max">
                    <thead class="*:uppercase *:bg-[#fbbc09] text-white">
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    No
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Nama kelas
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Wali kelas
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Ketua Kelas
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Meja
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Kursi
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Gambar Kelas
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-medium leading-none">
                                    Action
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $item)
                            <tr class="even:bg-blue-gray-50/50">
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->id }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->class_name }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->class_teacher }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->class_leader }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->chair }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal">
                                        {{ $item->desk }}
                                    </p>
                                </td>
                                <td class="p-4">
                                    @if ($item->class_image)
                                        <img src="{{ asset('class_images/' . $item->class_image) }}"
                                            alt="{{ $item->class_image }}" class="w-full h-full">
                                    @else
                                        <p
                                            class="block font-sans text-sm antialiased font-normal leading-normal text-gray-500">
                                            Tidak ada gambar
                                        </p>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <div class="flex gap items-center gap-4 *:hover:cursor-pointer *:rounded-md">
                                        <a href="#"
                                            class="flex gap-2 px-3 py-1 bg-yellow-400 hover:bg-yellow-500 font-sans text-sm antialiased font-medium leading-normal text-white">
                                            Edit
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                viewBox="0 0 512 512" class="fill-white">
                                                <path
                                                    d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                            </svg>
                                        </a>
                                        <form action="/kelas/{{ $item->id }}" method="post"
                                            class="flex gap-2 px-3 py-1 bg-red-400 hover:bg-red-500">
                                            @csrf
                                            @method('delete')
                                            <h5 class="font-sans text-sm antialiased font-medium leading-normal text-white">Delete</h5>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                                viewBox="0 0 448 512" class="fill-white">
                                                <path
                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="/js/table_list.js"></script>
@endsection
