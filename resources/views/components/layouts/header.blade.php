{{-- NAVBAR START --}}
<nav class="bg-white fixed w-full z-10 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <div
                class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center mr-2 text-white font-bold text-xl">
                MS</div>
            <span
                class="self-center text-3xl lg:text-xl font-bold font-meriweather whitespace-nowrap text-orange-800">Madu
                Samuel</span>
        </a>
        <div class="flex md:order-2 space-x-3 items-center md:space-x-4 rtl:space-x-reverse">
            <!-- Link Masuk untuk layar lg ke atas -->
            @auth
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center">
                        <div
                            class="w-8 h-8 rounded-full bg-orange-400 flex items-center justify-center text-white font-medium text-sm">
                            {{ substr(auth()->user()->name, 0, 2) }}
                        </div>
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <div class="px-4 py-3 text-sm text-gray-900">
                            <div class="font-medium truncate">{{ auth()->user()->name }}</div>
                            <div class="truncate">{{ auth()->user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Profil
                                    Saya</a>
                            </li>
                            <li>
                                <a href="{{ route('pesanan-saya') }}" class="block px-4 py-2 hover:bg-gray-100">Pesanan
                                    Saya</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-left">
                                    Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div x-data="{ open: window.location.pathname === '/login' }">
                    <button @click="open = !open"
                        class="hidden lg:inline text-orange-700 hover:text-orange-900 font-medium">Masuk</button>

                    <x-auth.login />
                </div>
            @endauth

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
                    <a href="/#"
                        class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/#produk"
                        class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                        aria-current="page">Produk</a>
                </li>
                <li>
                    <a href="/#about"
                        class="block py-2 px-3 md:p-0 text-orange-700 hover:text-orange-900 hover:bg-orange-50 rounded-sm md:bg-transparent"
                        aria-current="page">Tentang Kami</a>
                </li>
                <li>
                    <a href="/#testimonials"
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
