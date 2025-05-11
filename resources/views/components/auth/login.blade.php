<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <div class="w-full flex flex-col items-center pt-5">
                <!-- Modal header -->
                <!-- Header -->
                <div class="flex flex-col items-center pt-5 w-full">
                    <div
                        class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center mb-3 text-white font-bold text-xl">
                        MS
                    </div>
                    <h3 class="text-2xl md:text-3xl font-meriweather text-orange-800 mb-4">
                        Masuk ke Akun Anda
                    </h3>

                    <!-- Tabs -->
                    <div class="flex w-full justify-center border-b border-gray-200 mb-4">
                        <button id="tab-login"
                            class="w-1/2 py-2 text-center font-semibold focus:outline-none text-orange-600 border-b-2 border-orange-500">
                            Masuk
                        </button>
                        <button id="tab-register"
                            class="w-1/2 py-2 text-center font-semibold focus:outline-none text-gray-400 border-b-2 border-transparent">
                            Daftar
                        </button>
                    </div>

                </div>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="#" id="form-login">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-orange-800">Your
                            email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-orange-800">Your
                            password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:text-white"
                            required />
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300"
                                    required />
                            </div>
                            <label for="remember" class="ms-2 text-sm text-gray-900 ">Ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-orange-500 hover:underline ">Lupa
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-orange-600 text-white hover:bg-orange-700 focus:ring-orange-500">Masuk</button>
                </form>

                <!-- Register Form -->
                <form id="form-register" class="space-y-4 hidden">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-orange-800">Nama
                            Lengkap</label>
                        <input type="text" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="register-email" class="block mb-2 text-sm font-medium text-orange-800">Email</label>
                        <input type="email" id="register-email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="register-password"
                            class="block mb-2 text-sm font-medium text-orange-800">Password</label>
                        <input type="password" id="register-password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="register-confirm" class="block mb-2 text-sm font-medium text-orange-800">Konfirmasi
                            Password</label>
                        <input type="password" id="register-confirm"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 rounded-lg font-medium bg-orange-600 text-white hover:bg-orange-700">
                        Daftar
                    </button>
                </form>
                <button type="button" data-modal-hide="authentication-modal"
                    class="w-full px-4 py-2 mt-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-white text-orange-700 border border-orange-300 hover:bg-orange-50 focus:ring-orange-300">
                    Tutup
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
        </div>
    </div>
</div>
