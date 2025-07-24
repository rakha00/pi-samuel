{{-- NAVBAR START --}}
<nav x-data="{ open: false }" class="bg-white fixed w-full z-10 top-0 start-0 py-3">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-2 py-4">
        {{-- Mobile Header Section --}}
        <div class="flex items-center justify-between w-full lg:hidden">
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                <div
                    class="w-8 h-8 rounded-full bg-orange-400 flex items-center justify-center mr-2 text-white font-bold text-lg">
                    MS</div>
                <span class="self-center text-xl font-bold font-meriweather text-orange-800">Madu Samuel</span>
            </a>
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <livewire:cart />
                <button @click="open = !open" type="button"
                    class="inline-flex items-center p-2 w-8 h-8 justify-center text-sm text-gray-600 rounded-lg hover:bg-gray-100"
                    aria-controls="navbar-sticky" :aria-expanded="open">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Collapsible Mobile Navigation Links --}}
        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" class="w-full lg:hidden" id="navbar-sticky">
            <ul class="flex flex-col font-medium px-4 rounded-lg rtl:space-x-reverse bg-white">
                <li>
                    <a href="/#"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/#produk"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Produk</a>
                </li>
                <li>
                    <a href="/#about"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Tentang Kami</a>
                </li>
                <li>
                    <a href="/#testimonials"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Testimoni</a>
                </li>
                @guest
                    <li>
                        <button @click="$dispatch('open-modal', 'authentication-modal')"
                            class="py-2 w-full px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start font-medium">Masuk</button>
                    </li>
                @endguest

                @auth
                    <li x-data="{ open: false }">
                        <button @click="open = !open"
                            class="py-2 w-full px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start font-medium">
                            {{ auth()->user()->name }}
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
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
                                @if (auth()->user()->role == 'admin')
                                    <li>
                                        <a href="{{ route('filament.admin.pages.dashboard') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Admin
                                            Dashboard</a>
                                    </li>
                                @endif
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
                    </li>
                @endauth
            </ul>
        </div>

        {{-- Desktop Header Section --}}
        <div class="hidden lg:flex items-center justify-between w-full">
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                <div
                    class="w-8 h-8 rounded-full bg-orange-400 flex items-center justify-center mr-2 text-white font-bold text-lg">
                    MS</div>
                <span class="self-center text-xl lg:text-xl font-bold font-meriweather text-orange-800">Madu
                    Samuel</span>
            </a>
            <ul class="flex font-medium space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="/#"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="/#produk"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Produk</a>
                </li>
                <li>
                    <a href="/#about"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Tentang Kami</a>
                </li>
                <li>
                    <a href="/#testimonials"
                        class="block py-2 px-3 text-orange-700 hover:text-orange-900 hover:bg-orange-50 text-start"
                        aria-current="page">Testimoni</a>
                </li>
            </ul>
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
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
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
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
                                @if (auth()->user()->role == 'admin')
                                    <li>
                                        <a href="{{ route('filament.admin.pages.dashboard') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Admin
                                            Dashboard</a>
                                    </li>
                                @endif
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
                        <button @click="$dispatch('open-modal', 'authentication-modal')"
                            class="text-orange-700 hover:text-orange-900 font-medium">Masuk</button>
                    </div>
                @endauth
                <livewire:cart />
            </div>
        </div>
    </div>
</nav>
{{-- NAVBAR END --}}