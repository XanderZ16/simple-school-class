<dialog
    class="absolute top-0 w-screen h-screen bg-black bg-opacity-50 *:fixed *:top-1/2 *:left-1/2 *:-translate-x-1/2 *:-translate-y-1/2"
    id="modal" onclick="close_modal()">
    <div id="register-form" onclick="stop_propagation(event)">
        <div class="rounded-lg bg-[#d9d9d9] w-fit pt-4 pb-1 px-6">
            <h2 class="font-semibold text-3xl text-center">Register Form</h2>
            <hr class="border-slate-950 mt-4 border-[1px]">
            <div id="btns-usertype"
                class="relative my-2 *:font-medium *:rounded-md flex mb-4 *:w-1/2 *:py-2 *:text-center *:text-xl *:hover:cursor-pointer">
                <h3 id="btn-teacher" class="bg-slate-500 text-white">Guru</h3>
                <h3 id="btn-student" class="hover:bg-slate-500 hover:text-white">Siswa</h3>
            </div>

            <form action="/register" method="post"
                class="*:relative *:flex *:w-full *:*:flex *:mt-4 *:h-fit *:rounded-md first:*:*:w-full last:*:*:absolute last:*:*:right-0 last:*:*:top-0 last:*:*:translate-x-1/2 last:*:*:-translate-y-1/2 last:*:*:fill-red-600 last:*:*:self-center *:*:*:px-2 *:*:*:py-1 *:*:*:text-lg first:*:*:*:whitespace-nowrap first:*:*:*:font-medium first:*:*:*:h-full first:*:*:*:bg-slate-400 first:*:*:*:rounded-l-md last:*:*:*:w-full last:*:*:*:bg-slate-300 last:*:*:*:rounded-r-md">
                @csrf
                <input id="usertype" name="usertype" value="teacher" style="display: none" disabled>
                <div class="@error('name') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-name">Name</label>
                        <input type="text" id="input-name" name="name" value="{{ old('name') }}"
                            placeholder="Your name">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('name')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror

                <div class="@error('email') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-email">Email</label>
                        <input type="email" id="input-email" name="email" value="{{ old('email') }}"
                            placeholder="Your email">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('email')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror

                <div class="@error('password') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-password">Password</label>
                        <input type="password" id="input-password" name="password" placeholder="Your password">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('password')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror

                <div class="@error('confirm_password') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-confirm-password">Confirm Password</label>
                        <input type="password" id="input-confirm-password" name="confirm_password"
                            placeholder="Confirm password">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('confirm_password')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror
                <button type="submit" id="btn-register" hidden></button>
            </form>
            <h5 class="text-center mb-3 -mt-3">Already have an acoount? <span onclick="open_modal('login')"
                    class="text-blue-600 hover:cursor-pointer hover:underline">Login</span></h5>
        </div>

        <div
            class="flex mt-2 gap-2 *:flex *:items-center *:gap-2 *:rounded-lg *:py-1.5 *:pl-4 *:*:font-medium *:*:text-2xl *:hover:cursor-pointer">
            <div class="w-1/3 bg-[#d9d9d9] hover:bg-[#b9b9b9]" onclick="close_modal(event)">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-[#1e1e1e]">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
                <h3 id="close_modal_form" class="text-[#1e1e1e]">Back</h3>
            </div>
            <label for="btn-register" class="w-2/3 bg-[#1e1e1e] hover:bg-[#3e3e3e]">
                <h3 class="text-white">Register</h3>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-white">
                    <path
                        d="M448 75.2v361.7c0 24.3-19 43.2-43.2 43.2H43.2C19.3 480 0 461.4 0 436.8V75.2C0 51.1 18.8 32 43.2 32h361.7c24 0 43.1 18.8 43.1 43.2zm-37.3 361.6V75.2c0-3-2.6-5.8-5.8-5.8h-9.3L285.3 144 224 94.1 162.8 144 52.5 69.3h-9.3c-3.2 0-5.8 2.8-5.8 5.8v361.7c0 3 2.6 5.8 5.8 5.8h361.7c3.2 .1 5.8-2.7 5.8-5.8zM150.2 186v37H76.7v-37h73.5zm0 74.4v37.3H76.7v-37.3h73.5zm11.1-147.3l54-43.7H96.8l64.5 43.7zm210 72.9v37h-196v-37h196zm0 74.4v37.3h-196v-37.3h196zm-84.6-147.3l64.5-43.7H232.8l53.9 43.7zM371.3 335v37.3h-99.4V335h99.4z" />
                </svg>
            </label>
        </div>
    </div>

    <div id="login-form" onclick="stop_propagation(event)">
        <div class="rounded-lg bg-[#d9d9d9] w-fit pt-4 pb-1 px-6">
            <h2 class="font-semibold text-3xl text-center">Login Form</h2>
            <hr class="border-slate-950 mt-4 border-[1px]">
            <form action="/login" method="post"
                class="*:relative *:flex *:w-full *:*:flex *:mt-4 *:h-fit *:rounded-md first:*:*:w-full last:*:*:absolute last:*:*:right-0 last:*:*:top-0 last:*:*:translate-x-1/2 last:*:*:-translate-y-1/2 last:*:*:fill-red-600 last:*:*:self-center *:*:*:px-2 *:*:*:py-1 *:*:*:text-lg first:*:*:*:whitespace-nowrap first:*:*:*:font-medium first:*:*:*:h-full first:*:*:*:bg-slate-400 first:*:*:*:rounded-l-md last:*:*:*:w-full last:*:*:*:bg-slate-300 last:*:*:*:rounded-r-md">
                @csrf
                <input id="usertype" name="usertype" value="teacher" style="display: none" disabled>
                <div class="@error('login_email') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-email-login">Email</label>
                        <input type="email" id="input-email-login" name="login_email"
                            value="{{ old('login_email') }}" placeholder="Your email">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('login_email')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror

                <div class="@error('login_password') border-2 border-red-400 @enderror">
                    <div>
                        <label for="input-password-login">Password</label>
                        <input type="text" id="input-password-login" name="login_password"
                            value="{{ old('login_password') }}" placeholder="Your password">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                        <path
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                    </svg>
                </div>
                @error('login_password')
                    <h6 class="!mt-0 text-red-500">{{ $message }}</h6>
                @enderror
                <button type="submit" id="btn-login" hidden></button>
            </form>
            <h5 class="text-center mb-3 -mt-3">Don't have an acoount? <span onclick="open_modal('register')"
                    class="text-blue-600 hover:cursor-pointer hover:underline">Register</span></h5>
        </div>

        <div
            class="flex mt-2 gap-2 *:flex *:items-center *:gap-2 *:rounded-lg *:py-1.5 *:pl-4 *:*:font-medium *:*:text-2xl *:hover:cursor-pointer">
            <div class="w-1/3 bg-[#d9d9d9] hover:bg-[#b9b9b9]" onclick="close_modal(event)">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-[#1e1e1e]">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
                <h3 id="close_modal_form" class="text-[#1e1e1e]">Back</h3>
            </div>
            <label for="btn-login" class="w-2/3 bg-[#1e1e1e] hover:bg-[#3e3e3e]">
                <h3 class="text-white">Login</h3>
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"
                    class="fill-white">
                    <path
                        d="M448 75.2v361.7c0 24.3-19 43.2-43.2 43.2H43.2C19.3 480 0 461.4 0 436.8V75.2C0 51.1 18.8 32 43.2 32h361.7c24 0 43.1 18.8 43.1 43.2zm-37.3 361.6V75.2c0-3-2.6-5.8-5.8-5.8h-9.3L285.3 144 224 94.1 162.8 144 52.5 69.3h-9.3c-3.2 0-5.8 2.8-5.8 5.8v361.7c0 3 2.6 5.8 5.8 5.8h361.7c3.2 .1 5.8-2.7 5.8-5.8zM150.2 186v37H76.7v-37h73.5zm0 74.4v37.3H76.7v-37.3h73.5zm11.1-147.3l54-43.7H96.8l64.5 43.7zm210 72.9v37h-196v-37h196zm0 74.4v37.3h-196v-37.3h196zm-84.6-147.3l64.5-43.7H232.8l53.9 43.7zM371.3 335v37.3h-99.4V335h99.4z" />
                </svg>
            </label>
        </div>
    </div>
</dialog>

<script src="js/home.js"></script>

@error('name')
    <script>
        open_modal('register');
    </script>
@enderror
@error('email')
    <script>
        open_modal('register');
    </script>
@enderror
@error('password')
    <script>
        open_modal('register');
    </script>
@enderror
@error('confirm_password')
    <script>
        open_modal('register');
    </script>
@enderror
@error('login_email')
    <script>
        open_modal('login');
    </script>
@enderror
@error('login_password')
    <script>
        open_modal('login');
    </script>
@enderror
@if (session()->has('success'))
    <script>
        open_modal('login');
    </script>
@endif
