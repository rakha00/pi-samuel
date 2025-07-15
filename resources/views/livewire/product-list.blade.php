<div
    class="grid grid-cols-1 gap-8 p-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center mt-8 text-gray-800">
    @foreach ($products as $product)
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <div class="relative overflow-hidden w-full h-48">
                <img class="w-full h-full object-cover rounded-t-xl" src="{{ $product->image }}"
                    alt="{{ $product->name }}" />
            </div>
            <div class="p-5 flex flex-col flex-grow">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 h-16 overflow-hidden leading-tight">
                    {{ $product->name }}
                </h5>
                <p class="mb-3 text-base font-normal text-gray-600 h-20 overflow-hidden text-ellipsis flex-grow">
                    {{ $product->description }}
                </p>
                <div class="w-full flex flex-col sm:flex-row justify-between items-center mt-4">
                    <p class="text-orange-600 text-lg font-extrabold mb-2 sm:mb-0">
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                    </p>
                    <button wire:click="addToCart({{ $product->id }})"
                        class="inline-flex items-center px-6 py-2.5 text-base font-semibold text-center text-white bg-orange-500 rounded-full cursor-pointer hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 focus:outline-none transition-colors duration-200 w-full sm:w-auto justify-center">
                        Beli
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>