@extends('layouts.main')

@section('content')
    <div class="m-auto w-1/3 mt-12">
        <h1 class="text-center font-bold text-4xl text-slate-800 mb-8">Create New Class Data</h1>
        <form action="/kelas" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-full bg-black bg-opacity-10 px-8 py-3 *:mt-4 rounded-lg">
                <div
                    class="flex flex-col mt-4 *:flex *:items-center *:mb-4 *:rounded-md *:*:px-3 *:*:py-2 first:*:*:bg-slate-400 first:*:*:rounded-l-md first:*:*:text-white first:*:*:font-medium last:*:*:bg-slate-300 last:*:*:flex-1 focus:last:*:*:outline-none last:*:*:rounded-r-md">
                    <!-- Nama Kelas -->
                    <div class="@error('class_name') border-2 border-red-400 @enderror">
                        <label for="class_name">Nama Kelas</label>
                        <input type="text" id="class_name" name="class_name" required>
                    </div>
                    <!-- Wali Kelas -->
                    <div class="@error('class_teacher') border-2 border-red-400 @enderror">
                        <label for="class_teacher">Wali Kelas</label>
                        <input type="text" id="class_teacher" name="class_teacher" required>
                    </div>
                    <!-- Ketua Kelas -->
                    <div class="@error('class_leader') border-2 border-red-400 @enderror">
                        <label for="class_leader">Ketua Kelas</label>
                        <input type="text" id="class_leader" name="class_leader" required>
                    </div>
                </div>

                <hr class="h-2 !m-0 border-black">
                <h5 class="font-medium text-xl !mt-0">Perangkat Kelas</h5>

                <div
                    class="flex gap-8 last:*:*:w-12 mt-4 *:flex *:items-center *:mb-4 *:rounded-md *:*:px-3 *:*:py-2 first:*:*:bg-slate-400 first:*:*:rounded-l-md first:*:*:text-white first:*:*:font-medium last:*:*:text-center last:*:*:bg-slate-300 focus:last:*:*:outline-none last:*:*:rounded-r-md">
                    <div class="@error('chair') border-2 border-red-400 @enderror">
                        <label for="chair">Kursi</label>
                        <input type="text" id="chair" name="chair" maxlength="2" required>
                    </div>
                    <div class="@error('desk') border-2 border-red-400 @enderror">
                        <label for="desk">Meja</label>
                        <input type="text" id="desk" name="desk" maxlength="2" required>
                    </div>
                </div>

                <label for="class_image" id="drop-area" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)" ondragleave="dragLeaveHandler(event)"
                    class="flex flex-col !mt-0 mb-2 justify-center items-center w-full py-12 rounded-lg border border-black border-dashed transition hover:cursor-pointer hover:bg-black hover:bg-opacity-50 hover:text-white hover:border-white">
                    <h4>Input gambar kelas</h4>
                    <h5 class="font-light">Drag and drop image here</h5>
                    <input type="file" id="class_image" name="class_image" accept="image/*" onchange="handleFiles(this.files)" hidden>
                </label>
            </div>
            <button id="submit" type="submit" hidden></button>
        </form>

        <div
            class="flex mt-2 gap-2 *:flex *:items-center *:gap-2 *:rounded-lg *:py-1.5 *:pl-4 *:*:font-medium *:*:text-2xl *:hover:cursor-pointer">
            <a class="w-1/3 bg-[#d9d9d9] hover:bg-[#b9b9b9]" href="/kelas">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-[#1e1e1e]">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
                <h3 id="close_modal_form" class="text-[#1e1e1e]">Back</h3>
            </a>
            <label for="submit" class="w-2/3 bg-[#1e1e1e] hover:bg-[#3e3e3e]">
                <h3 class="text-white">Login</h3>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-white">
                    <path
                        d="M448 75.2v361.7c0 24.3-19 43.2-43.2 43.2H43.2C19.3 480 0 461.4 0 436.8V75.2C0 51.1 18.8 32 43.2 32h361.7c24 0 43.1 18.8 43.1 43.2zm-37.3 361.6V75.2c0-3-2.6-5.8-5.8-5.8h-9.3L285.3 144 224 94.1 162.8 144 52.5 69.3h-9.3c-3.2 0-5.8 2.8-5.8 5.8v361.7c0 3 2.6 5.8 5.8 5.8h361.7c3.2 .1 5.8-2.7 5.8-5.8zM150.2 186v37H76.7v-37h73.5zm0 74.4v37.3H76.7v-37.3h73.5zm11.1-147.3l54-43.7H96.8l64.5 43.7zm210 72.9v37h-196v-37h196zm0 74.4v37.3h-196v-37.3h196zm-84.6-147.3l64.5-43.7H232.8l53.9 43.7zM371.3 335v37.3h-99.4V335h99.4z" />
                </svg>
            </label>
        </div>
    </div>

    <script src="/js/form_kelas.js"></script>
@endsection
