<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

</head>

<body class="bg-orange-50">
    {{-- NAVBAR START --}}
    <nav class="bg-white fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div
                    class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center mr-2 text-white font-bold text-xl">
                    MS</div>
                <span
                    class="self-center text-3xl lg:text-xl font-bold font-meriweather whitespace-nowrap text-orange-800">Madu
                    Samuel</span>
            </a>
            <div class="flex md:order-2 space-x-3 items-center md:space-x-4 rtl:space-x-reverse">
                <!-- Link Masuk untuk layar lg ke atas -->
                <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="hidden lg:inline text-orange-700 hover:text-orange-900 font-medium">Masuk</a>

                <!-- Ikon keranjang -->
                <div class="text-orange-700">
                    <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                        aria-controls="drawer-navigation">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </button>
                </div>

                <!-- drawer component -->
                <div id="drawer-navigation"
                    class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
                    tabindex="-1" aria-labelledby="drawer-navigation-label">
                    <h5 id="drawer-navigation-label"
                        class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
                    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <div class="py-4 overflow-y-auto">
                        <ul class="space-y-2 font-medium">
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 22 21">
                                        <path
                                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                        <path
                                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                    </svg>
                                    <span class="ms-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 18 18">
                                        <path
                                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                                    <span
                                        class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                                    <span
                                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 18">
                                        <path
                                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 18 20">
                                        <path
                                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 18 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                                        <path
                                            d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                                        <path
                                            d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                                    </svg>
                                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Hamburger menu -->
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-sticky">
                <ul
                    class="flex flex-col font-medium mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#produk"
                            class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                            aria-current="page">Produk</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                            aria-current="page">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#testimonials"
                            class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                            aria-current="page">Testimoni</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent md:hidden"
                            aria-current="page">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- NAVBAR END --}}

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
                            <label for="register-email"
                                class="block mb-2 text-sm font-medium text-orange-800">Email</label>
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
                            <label for="register-confirm"
                                class="block mb-2 text-sm font-medium text-orange-800">Konfirmasi Password</label>
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

    {{-- HERO START --}}
    <section class="relative bg-orange-100 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.pexels.com/photos/9464167/pexels-photo-9464167.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="orange background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-orange-500/40 to-orange-700/40"></div>
        </div>

        <div class="relative mt-20 lg:mt-0 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 lg:py-32">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div>
                    <h1
                        class=" text-orange-900 mb-4 text-3xl md:text-4xl lg:text-5xl font-meriweather font-bold leading-tight">
                        Madu Murni <br class="hidden sm:block">
                        <span class="text-orange-600">Berkualitas Premium</span>
                    </h1>
                    <p class="text-lg md:text-xl text-orange-800 mb-8 max-w-2xl">
                        Nikmati manisnya kehidupan dengan madu asli dari hutan Indonesia yang diproses secara alami dan
                        kaya akan nutrisi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#products"
                            class="px-4 py-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-orange-600 text-white hover:bg-orange-700 focus:ring-orange-500 text-center">Lihat
                            Produk</a>
                        <a href="#features"
                            class="px-4 py-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-white text-orange-700 border border-orange-300 hover:bg-orange-50 focus:ring-orange-300 text-center">Pelajari
                            Manfaat</a>
                    </div>

                    <div class="mt-8 flex items-center">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Customer">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Customer">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=100"
                                alt="Customer">
                            <div
                                class="w-10 h-10 rounded-full border-2 border-white bg-orange-600 flex items-center justify-center text-xs font-medium text-white">
                                +99</div>
                        </div>
                        <div class="ml-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="text-sm text-orange-800">Dari <span class="font-medium">532</span> pelanggan
                                puas
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 lg:mt-0 flex justify-center lg:justify-end">
                    <div class="relative w-72 h-72 md:w-96 md:h-96 rounded-full">
                        <div class="absolute inset-0 rounded-full bg-orange-200 animate-pulse"></div>
                        <img src="https://images.pexels.com/photos/6412523/pexels-photo-6412523.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt="Madu Samuel Product" class="absolute inset-4 rounded-full object-cover shadow-lg">
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,128L60,133.3C120,139,240,149,360,144C480,139,600,117,720,133.3C840,149,960,203,1080,202.7C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- PRODUCT START --}}
    <section class="container mx-auto bg-white md:pb-28 pt-24 pb-10" id="produk">
        <div class="w-full flex flex-col items-center">
            <h2
                class="text-orange-800 text-center text-2xl md:text-3xl lg:text-5xl font-meriweather font-bold leading-tight my-4">
                Koleksi
                Madu Premium</h2>
            <p class="text-gray-600 max-w-2xl md:text-lg px-5 lg:px-0 text-center"> Pilih dari berbagai pilihan madu
                premium kami
                yang
                diambil
                dari
                berbagai daerah di Indonesia dengan
                kualitas dan keaslian terjamin.</p>
        </div>

        <div
            class="grid grid-cols-1 gap-6 md:px-4 md:grid-cols-2 lg:grid-cols-3 place-items-center mt-8 text-orange-800">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
                <img class="rounded-t-lg"
                    src="https://images.unsplash.com/photo-1746713915201-4eed01ca887a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-ti">Noteworthy
                        technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <div class="w-full flex justify-between items-center">
                        <p class="text-orange-800 font-bold">Rp60.000</p>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg">
                            Beli
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- PRODUCT END --}}

    {{-- ABOUT US START --}}
    <section id="about" class="container mx-auto bg-orange-50 pt-24">
        <div class="w-full flex flex-col items-center mb-12">
            <h2
                class="text-orange-800 text-center text-2xl md:text-3xl lg:text-5xl font-meriweather font-bold leading-tight my-4">
                Mengapa Memilih Madu Samuel?</h2>
            <p class="text-gray-600 max-w-2xl md:text-lg px-5 lg:px-0 text-center">Kami menawarkan produk madu dengan
                kualitas terbaik yang
                diproses secara alami tanpa tambahan bahan kimia atau pengawet.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 lg:px-0">
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">100% Alami</h3>
                <p class="text-gray-600">Madu kami diproses secara alami tanpa pemanasan berlebih untuk menjaga nutrisi
                    dan enzim alaminya.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">Kualitas Terjamin</h3>
                <p class="text-gray-600">Kami melakukan pengujian kualitas untuk setiap batch produk untuk memastikan
                    kualitas premium.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">Murni & Asli</h3>
                <p class="text-gray-600">Madu kami berasal dari lebah yang dipelihara di lingkungan alami bebas polusi
                    dan pestisida.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">Kaya Manfaat</h3>
                <p class="text-gray-600">Madu kami kaya akan antioksidan, mineral, dan enzim yang baik untuk kesehatan
                    dan imunitas tubuh.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">Pengiriman Cepat</h3>
                <p class="text-gray-600">Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dengan
                    pengiriman cepat.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-800">Dukungan Pelanggan</h3>
                <p class="text-gray-600">Tim kami siap membantu Anda dengan segala pertanyaan atau masalah yang mungkin
                    Anda miliki.</p>
            </div>
        </div>

        <div class="mt-16 bg-white rounded-xl shadow-sm p-8 lg:p-12">
            <div class="lg:grid lg:grid-cols-5 gap-8 items-center">
                <div class="col-span-3 mb-8 lg:mb-0">
                    <h3 class="text-2xl font-bold text-orange-800 mb-4">Manfaat Madu untuk Kesehatan</h3>
                    <p class="text-gray-600 mb-6">Madu telah dikenal selama berabad-abad karena manfaat kesehatannya
                        yang luar biasa. Berikut adalah beberapa manfaat kesehatan dari mengonsumsi madu secara teratur:
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Kaya akan antioksidan yang membantu melindungi tubuh dari
                                kerusakan sel.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Memiliki sifat antibakteri dan antivirus yang dapat membantu
                                melawan infeksi.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Dapat membantu meredakan batuk dan sakit tenggorokan.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Memberikan energi alami dan meningkatkan performa
                                olahraga.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2 mt-0.5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Dapat membantu menjaga kesehatan jantung dan menurunkan tekanan
                                darah.</span>
                        </li>
                    </ul>
                </div>

                <div class="col-span-2">
                    <img src="https://images.pexels.com/photos/4046486/pexels-photo-4046486.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Manfaat Madu" class="rounded-lg shadow-md w-full object-cover h-80">
                </div>
            </div>
        </div>
    </section>
    {{-- ABOUT US END --}}

    {{-- TESTIMONIAL START --}}
    <section id="testimonials" class="container mx-auto bg-white pt-24">
        <div class="w-full flex flex-col items-center mb-12 lg:mt-12">
            <h2
                class="text-orange-800 text-center text-2xl md:text-3xl lg:text-5xl font-meriweather font-bold leading-tight my-4">
                Apa Kata Pelanggan Kami</h2>
            <p class="text-gray-600 max-w-2xl md:text-lg px-5 lg:px-0 text-center">Dengarkan pengalaman pelanggan kami
                yang telah merasakan
                kualitas dan manfaat dari produk Madu Samuel.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
            <div class="bg-orange-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <p class="text-gray-600 mb-6 italic">"Madu Samuel adalah produk terbaik yang pernah saya coba. Rasanya
                    sangat alami dan tidak terlalu manis. Saya mengonsumsinya setiap pagi dan merasa lebih berenergi
                    sepanjang hari."</p>

                <div class="flex items-center">
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=100"
                        alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <p class="font-semibold text-orange-800">Siti Rahma</p>
                        <p class="text-sm text-gray-500">Jakarta</p>
                    </div>
                </div>
            </div>

            <div class="bg-orange-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <p class="text-gray-600 mb-6 italic">"Saya sudah mencoba berbagai merek madu, tetapi Madu Samuel
                    benar-benar berbeda. Kualitasnya luar biasa dan saya percaya ini adalah madu murni yang
                    sesungguhnya. Anak-anak saya sangat menyukainya."</p>

                <div class="flex items-center">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=100"
                        alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <p class="font-semibold text-orange-800">Budi Santoso</p>
                        <p class="text-sm text-gray-500">Surabaya</p>
                    </div>
                </div>
            </div>

            <div class="bg-orange-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <p class="text-gray-600 mb-6 italic">"Pengiriman cepat dan pelayanannya sangat baik. Madu Kelengkeng
                    yang saya beli memiliki aroma dan rasa yang khas. Saya akan pesan lagi untuk stok di rumah. Terima
                    kasih Madu Samuel!"</p>

                <div class="flex items-center">
                    <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=100"
                        alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <p class="font-semibold text-orange-800">Anita Wijaya</p>
                        <p class="text-sm text-gray-500">Bandung</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center pb-10">
            <a href="#products"
                class="px-4 py-2 rounded-lg font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-orange-600 text-white hover:bg-orange-700 focus:ring-orange-500">Beli
                Sekarang</a>
        </div>
    </section>
    {{-- TESTIMONIAL END --}}

    {{-- FOOTER START --}}
    <footer class="bg-orange-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-1">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 rounded-full bg-white flex items-center justify-center mr-2 text-orange-800 font-bold text-xl">
                            MS</div>
                        <span class="text-xl font-meriweather font-bold text-white">Madu Samuel</span>
                    </div>
                    <p class="text-orange-200 mb-4">Madu murni berkualitas premium dari pedalaman Indonesia.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-orange-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-orange-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="text-orange-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.023 10.023 0 01-3.127 1.195c-.897-1.01-2.177-1.603-3.593-1.603-2.75 0-4.95 2.283-4.95 5.048 0 .396.044.78.128 1.15a13.98 13.98 0 01-10.2-5.33 5.06 5.06 0 001.55 6.745 4.952 4.952 0 01-2.232-.618v.06c0 2.447 1.695 4.49 3.93 4.955a4.791 4.791 0 01-2.221.085c.627 2.006 2.445 3.466 4.6 3.505A10.023 10.023 0 010 19.288a14.073 14.073 0 007.757 2.28c9.308 0 14.404-7.96 14.404-14.872 0-.227-.005-.448-.015-.672A10.485 10.485 0 0024 4.59h-.047z" />
                            </svg>
                        </a>
                        <a href="#" class="text-orange-200 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.023 10.023 0 01-3.127 1.195c-.897-1.01-2.177-1.603-3.593-1.603-2.75 0-4.95 2.283-4.95 5.048 0 .396.044.78.128 1.15a13.98 13.98 0 01-10.2-5.33 5.06 5.06 0 001.55 6.745 4.952 4.952 0 01-2.232-.618v.06c0 2.447 1.695 4.49 3.93 4.955a4.791 4.791 0 01-2.221.085c.627 2.006 2.445 3.466 4.6 3.505A10.023 10.023 0 010 19.288a14.073 14.073 0 007.757 2.28c9.308 0 14.404-7.96 14.404-14.872 0-.227-.005-.448-.015-.672A10.485 10.485 0 0024 4.59h-.047z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Produk Kami</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Hutan</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Kelengkeng</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Randu</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Premium</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Kalimantan</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Madu Manuka</a></li>
                    </ul>
                </div>

                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Informasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-orange-200 hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Cara Pemesanan</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-orange-200 hover:text-white">Kontak Kami</a></li>
                    </ul>
                </div>

                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-2 text-orange-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-orange-200">Jl. Madu No. 123, Jakarta Selatan</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-2 text-orange-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-orange-200">info@madusamuel.com</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-2 text-orange-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-orange-200">+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 mr-2 text-orange-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-orange-200">Senin - Sabtu: 08.00 - 17.00</span>
                        </li>
                    </ul>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-4">Langganan Newsletter</h3>
                        <form class="flex">
                            <input type="email" placeholder="Email Anda"
                                class="px-3 py-2 rounded-l-lg w-full focus:outline-none text-gray-900">
                            <button type="submit"
                                class="bg-orange-600 hover:bg-orange-700 px-4 py-2 rounded-r-lg text-white font-medium">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-orange-700">
                <p class="text-center text-orange-300">&copy; 2025 Madu Samuel. All rights reserved.</p>
            </div>
        </div>
    </footer>
    {{-- FOOTER END --}}


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        const tabLogin = document.getElementById('tab-login');
        const tabRegister = document.getElementById('tab-register');
        const formLogin = document.getElementById('form-login');
        const formRegister = document.getElementById('form-register');

        tabLogin.addEventListener('click', () => {
            tabLogin.classList.add('text-orange-600', 'border-orange-500');
            tabLogin.classList.remove('text-gray-400', 'border-transparent');
            tabRegister.classList.remove('text-orange-600', 'border-orange-500');
            tabRegister.classList.add('text-gray-400', 'border-transparent');

            formLogin.classList.remove('hidden');
            formRegister.classList.add('hidden');
        });

        tabRegister.addEventListener('click', () => {
            tabRegister.classList.add('text-orange-600', 'border-orange-500');
            tabRegister.classList.remove('text-gray-400', 'border-transparent');
            tabLogin.classList.remove('text-orange-600', 'border-orange-500');
            tabLogin.classList.add('text-gray-400', 'border-transparent');

            formLogin.classList.add('hidden');
            formRegister.classList.remove('hidden');
        });
    </script>

</body>

</html>
