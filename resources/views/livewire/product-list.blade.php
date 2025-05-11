<div class="grid grid-cols-1 gap-6 md:px-4 md:grid-cols-2 lg:grid-cols-3 place-items-center mt-8 text-orange-800">
    @foreach ($products as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm ">
            <img class="rounded-t-lg" src="{{ $product->image }}" alt="{{ $product->name }}" />
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-ti">{{ $product->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->description }}</p>
                <div class="w-full flex justify-between items-center">
                    <p class="text-orange-800 font-bold">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                    <button wire:click="addToCart({{ $product->id }})"
                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg cursor-pointer">
                        Beli
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
