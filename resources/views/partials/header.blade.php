@if ($title == 'Skaju | Beranda')
    <header class="px-32 py-5">
        <nav class="flex justify-between items-center">
            <div class="flex items-center gap-6">
                <img src="assets/logo/skaju.png" alt="Logo Skaju" class="w-12">
                <h1 class="text-white text-4xl font-semibold">Skaju</h1>
            </div>

            <div class="flex gap-6 relative px-6 py-2 box-border bg-[#d9d9d9] rounded-md">
                <div class="group relative flex items-center gap-3 hover:cursor-pointer" onclick="open_modal('login')">
                    <div class="absolute bg-black bottom-0 left-0 h-0.5 w-0 group-hover:w-full transition-all"></div>
                    <h3 class="text-xl font-semibold leading-none">Log in</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                    </svg>
                </div>

                <div class="group px-6 py-1 rounded-md cursor-pointer bg-[#1e1e1e] hover:bg-[#444444]"
                    onclick="open_modal('register')">
                    <h3 class="text-xl text-white font-semibold h-fit group-hover:underline">Gabung Skaju</h3>
                </div>
            </div>
        </nav>
    </header>
@else
    <header class="px-32 py-2 bg-gradient-to-r from-[#FF8B00] to-[#FBBC09]">
        <nav class="flex justify-between items-center">
            <div class="flex items-center gap-6">
                <img src="/assets/logo/skaju.png" alt="Logo Skaju" class="w-8">
                <h1 class="text-white text-3xl font-semibold">Skaju</h1>
            </div>

            <div class="flex gap-4 *:text-white *:cursor-pointer hover:*:underline">
                <h3>Daftar Kelas</h3>
                <h3>Daftar Guru</h3>
                <h3>Daftar Mapel</h3>
            </div>

            <div class="relative flex items-center gap-4 hover:cursor-pointer after:absolute after:bottom-0 after:w-0 after:h-0.5 after:bg-white after:transition-all hover:after:w-full">
                <h4 class="font-semibold text-white text-lg">Logout</h4>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                    viewBox="0 0 512 512" class="fill-white">
                    <path
                        d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
                </svg>
            </div>
        </nav>
    </header>
@endif
