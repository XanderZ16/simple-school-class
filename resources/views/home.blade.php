@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="/css/home.css">
    @include('partials.response');

    <div
        class="absolute w-full h-dvh top-0 left-0 [background:linear-gradient(180deg,rgb(255,139,0)_13.5%,rgb(251,188,9)_74.9%,rgb(255,255,255)_100%)] -z-50">
    </div>

    <div class="mt-14 flex items-center px-32 justify-between">
        <div class="w-5/12">
            <h2 class="font-bold text-6xl text-white text-balance">Data Sekolah SMK Negeri 7 Batam</h2>
            <p class="mt-4 font-medium text-2xl text-balance">Website smkn 7 batam yang digunakan untuk penyimpanan data-data
                kelas, mata pelajaran, guru, dan siswa yang
                mudah untuk digunakan.</p>
            <div
                class="mt-6 flex justify-between *:font-medium *:text-3xl *:rounded-full *:px-8 *:py-2 *:hover:cursor-pointer *:transition">
                <div onclick="open_modal('register')" class="group bg-[#1e1e1e] hover:bg-[#3e3e3e]">
                    <h3 class="text-white group-hover:underline">Gabung Sekarang</h3>
                </div>
                <div class="group border-4 border-[#1e1e1e] hover:border-[#444444] hover:bg-[#444444]">
                    <h3 class="text-[#1e1e1e] group-hover:text-white group-hover:underline transition">More ?</h3>
                </div>
            </div>
        </div>
        <img src="assets/pictures/home.png" alt="Home">
    </div>

    {{-- Authentication PopUp --}}
    @include('partials.authentication')
@endsection
