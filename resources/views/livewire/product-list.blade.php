<div class="grid grid-cols-1 gap-6 md:px-4 md:grid-cols-2 lg:grid-cols-3 place-items-center mt-8 text-orange-800">
    @foreach ($products as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col">
            <img class="rounded-t-lg" src="{{ $product->image }}" alt="{{ $product->name }}" />
            <div class="p-5 flex flex-col flex-grow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight h-16 overflow-hidden">{{ $product->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 h-20 overflow-hidden text-ellipsis">{{ $product->description }}</p>
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