<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        $this->dispatch('add-to-cart', productId: $productId, name: $product->name, price: $product->price, quantity: 1);
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
