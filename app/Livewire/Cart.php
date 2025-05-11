<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public $product;
    public $cart = [];
    public $order = [];
    public $totalPrice;

    public function mount()
    {
        $this->product = Product::all();

        if (session()->has('cart')) {
            $this->cart = session('cart');
            $this->calculateTotal();
        } else {
            session(['cart' => $this->cart]);
            $this->calculateTotal();
        }
    }

    #[On('add-to-cart')]
    public function addToCart($productId, $name, $price, $quantity)
    {
        $existingProduct = collect($this->cart)->first(function ($item) use ($productId) {
            return $item['id'] === $productId;
        });

        if ($existingProduct) {
            $this->increaseQuantity($productId);
        }

        if (!$existingProduct) {
            $this->cart[] = [
                'id' => $productId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity
            ];
            session(['cart' => $this->cart]);
            $this->calculateTotal();
        }

        $this->dispatch('open-cart');
    }

    public function removeFromCart($productId)
    {
        $this->cart = array_filter($this->cart, function ($item) use ($productId) {
            return $item['id'] !== $productId;
        });

        session(['cart' => $this->cart]);
        $this->calculateTotal();
    }

    public function increaseQuantity($productId)
    {
        $this->cart = array_map(function ($item) use ($productId) {
            if ($item['id'] === $productId) {
                $item['quantity']++;
            }
            return $item;
        }, $this->cart);
        session(['cart' => $this->cart]);
        $this->calculateTotal();
    }

    public function decreaseQuantity($productId)
    {
        $this->cart = array_map(function ($item) use ($productId) {
            if ($item['id'] === $productId) {
                $item['quantity'] = max(1, $item['quantity'] - 1);
            }
            return $item;
        }, $this->cart);
        session(['cart' => $this->cart]);
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->totalPrice = 0;
        foreach ($this->cart as $item) {
            $this->totalPrice += $item['price'] * $item['quantity'];
        }
        return $this->totalPrice;
    }

    public function checkout()
    {
        dd($this->cart);
        $this->order = $this->cart;
        $this->cart = [];
        session(['cart' => $this->cart]);
        $this->dispatch('close-cart');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
