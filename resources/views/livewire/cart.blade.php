<div class="text-orange-700" x-data="{ open: false }" x-on:open-cart="open = true"
    x-on:open-new-tab.window="window.open($event.detail.url, '_blank')">
    <!-- Cart Icon Button -->
    <button type="button" x-on:click="open = true"
        class="relative p-2 rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-7 h-7 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
        @if (session()->has('cart') && $totalQuantity > 0)
            <span
                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold">
                {{ $totalQuantity }}
            </span>
        @endif
    </button>

    <!-- Overlay gelap -->
    <div class="fixed inset-0 bg-black/40 z-50" x-show="open" x-on:click="open = false"
        x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <!-- Drawer dari kanan -->
    <div class="fixed top-0 right-0 h-full shadow-2xl z-50 transform transition-transform duration-300 ease-in-out
                w-full sm:w-[450px] p-4 sm:p-0" x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full">
        <div class="h-full flex flex-col bg-white shadow-xl overflow-y-auto rounded-lg sm:rounded-none">
            <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
                <div class="flex items-center justify-between border-b pb-4 mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Keranjang Belanja</h2>
                    <div class="ml-3 h-7 flex items-center">
                        <button x-on:click="open = false"
                            class="text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 rounded-full p-1">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mt-8">
                    @if (session()->has('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mb-6 shadow-sm"
                            role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline ml-2">Anda harus login untuk checkout.</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3"
                                onclick="this.parentElement.style.display='none';">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                    @endif
                    <div class="flow-root">
                        <ul role="list" class="-my-6">
                            @if (session()->has('cart') && !empty(session('cart')))
                                @foreach (session('cart') as $item)
                                    <div>
                                        <li
                                            class="py-6 flex flex-col sm:flex-row items-center sm:items-start border-b border-gray-100 last:border-b-0">
                                            <div
                                                class="flex-shrink-0 w-28 h-28 sm:w-24 sm:h-24 border border-gray-200 rounded-lg overflow-hidden mb-4 sm:mb-0 shadow-sm">
                                                <img src="{{ $product->find($item['id'])->image }}"
                                                    class="w-full h-full object-cover">
                                            </div>

                                            <div class="ml-0 sm:ml-4 flex-1 flex flex-col w-full text-center sm:text-left">
                                                <div
                                                    class="flex flex-col sm:flex-row justify-between text-base font-medium text-gray-900 w-full mb-2 sm:mb-0">
                                                    <h3 class="text-lg sm:text-base font-semibold text-gray-800">
                                                        {{ $item['name'] }}</h3>
                                                    <p class="mt-1 sm:mt-0 text-xl sm:text-base text-gray-700 font-bold">
                                                        <span>Rp{{ number_format($item['price'], 0, ',', '.') }}</span>
                                                    </p>
                                                </div>
                                                <div
                                                    class="flex flex-col sm:flex-row items-center sm:items-end justify-between text-sm mt-2">
                                                    <div class="flex items-center space-x-3 mb-2 sm:mb-0">
                                                        <button wire:click="decreaseQuantity({{ $item['id'] }})"
                                                            class="p-1.5 border border-gray-300 rounded-full text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <span
                                                            class="text-gray-800 text-xl font-bold">{{ $item['quantity'] }}</span>
                                                        <button wire:click="increaseQuantity({{ $item['id'] }})"
                                                            class="p-1.5 border border-gray-300 rounded-full text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all duration-200">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="flex mt-2 sm:mt-0">
                                                        <button wire:click="removeFromCart({{ $item['id'] }})" type="button"
                                                            class="font-medium text-red-600 hover:text-red-700 text-base sm:text-sm transition-colors duration-200">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                @endforeach
                            @endif


                            @if (session()->has('cart') && empty(session('cart')))
                                <li class="py-12 text-center">
                                    <p class="text-gray-500 text-lg mb-4">Keranjang belanja Anda kosong.</p>
                                    <button x-on:click="open = false"
                                        class="mt-4 text-orange-600 font-medium text-lg hover:text-orange-700 transition-colors duration-200">
                                        Belanja Sekarang <span aria-hidden="true">&rarr;</span>
                                    </button>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 sm:px-6 bg-gray-50">
                <div class="flex flex-col sm:flex-row justify-between text-base font-medium text-gray-900 mb-4">
                    <p class="mb-2 sm:mb-0 text-xl font-bold">Subtotal</p>
                    <p class="text-xl font-bold">
                        <span>Rp{{ number_format($totalPrice, 0, ',', '.') }}</span>
                    </p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500 text-center sm:text-left mb-6">Pengiriman dan pajak dihitung saat
                    checkout.
                </p>
                <div class="mt-6">
                    <button wire:click="checkout"
                        class="flex justify-center items-center w-full bg-orange-600 px-6 py-3 rounded-lg text-white font-semibold cursor-pointer text-base sm:text-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition-colors duration-200 transform hover:scale-105">
                        Checkout
                    </button>
                </div>
                <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                    <p>
                        atau
                        <button x-on:click="open = false"
                            class="text-orange-600 font-medium hover:text-orange-700 mt-2 sm:mt-0 hover:underline transition-colors duration-200">
                            Lanjutkan Belanja
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>