<div class="text-orange-700" x-data="{ open: false }" x-on:open-cart="open = true">
    <!-- Tombol ikon keranjang -->
    <button type="button" x-on:click="open = true">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    </button>

    <!-- Overlay gelap -->
    <div class="fixed inset-0 bg-black/30 z-50" x-show="open" x-on:click="open = false"
        x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <!-- Drawer dari kanan -->
    <div class="fixed top-0 right-0 h-full bg-blue-400 shadow-lg z-50 transform transition-transform duration-300 ease-in-out
                w-[80%] sm:w-[400px]"
        x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
        <div class="h-full flex flex-col bg-white shadow-xl overflow-y-auto">
            <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
                <div class="flex items-start justify-between">
                    <h2 class="text-lg font-medium text-gray-900">Keranjang Belanja</h2>
                    <div class="ml-3 h-7 flex items-center">
                        <button x-on:click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="flow-root">
                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                            @if (session()->has('cart') && !empty(session('cart')))
                                @foreach (session('cart') as $item)
                                    <div>
                                        <li class="py-6 flex">
                                            <div
                                                class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                                                <img src="{{ $product->find($item['id'])->image }}"
                                                    class="w-full h-full object-cover">
                                            </div>

                                            <div class="ml-4 flex-1 flex flex-col">
                                                <div>
                                                    <div
                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>{{ $item['name'] }}</h3>
                                                        <p class="ml-4">
                                                            <span>Rp{{ number_format($item['price'], 0, ',', '.') }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="flex-1 flex items-end justify-between text-sm">
                                                    <div class="flex items-center space-x-2">
                                                        <button wire:click="decreaseQuantity({{ $item['id'] }})">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <span class="text-gray-700">{{ $item['quantity'] }}</span>
                                                        <button wire:click="increaseQuantity({{ $item['id'] }})"
                                                            class="text-gray-500 hover:text-gray-700">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="flex">
                                                        <button wire:click="removeFromCart({{ $item['id'] }})"
                                                            type="button"
                                                            class="font-medium text-red-600 hover:text-red-500">
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
                                <li class="py-6 text-center">
                                    <p class="text-gray-500">Keranjang belanja Anda kosong.</p>
                                    <button x-on:click="open = false" class="mt-4 text-orange-600 font-medium">
                                        Belanja Sekarang
                                    </button>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Subtotal</p>
                    <p>
                        <span>Rp{{ number_format($totalPrice, 0, ',', '.') }}</span>
                    </p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Pengiriman dan pajak dihitung saat checkout.
                </p>
                <div class="mt-6">
                    <button wire:click="checkout"
                        class="flex justify-center items-center w-full bg-orange-600 px-6 py-3 rounded-md text-white font-medium">
                        Checkout
                    </button>
                </div>
                <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                    <p>
                        atau
                        <button x-on:click="open = false" class="text-orange-600 font-medium hover:text-orange-700">
                            Lanjutkan Belanja
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
