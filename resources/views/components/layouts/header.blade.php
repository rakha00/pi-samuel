{{-- NAVBAR START --}}
<nav class="bg-white fixed w-full z-10 top-0 start-0">
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
            <livewire:cart />

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
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="lg:hidden py-2 w-full px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start rounded-sm md:bg-transparent font-medium">Masuk</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- NAVBAR END --}}
