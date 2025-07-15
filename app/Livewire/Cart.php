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
    public $totalQuantity;

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
        $this->totalQuantity = 0;
        foreach ($this->cart as $item) {
            $this->totalPrice += $item['price'] * $item['quantity'];
            $this->totalQuantity += $item['quantity'];
        }
        return [
            'total_price' => $this->totalPrice,
            'total_quantity' => $this->totalQuantity,
        ];
    }

    public function checkout()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => $this->totalPrice,
            ],
            'item_details' => array_map(function ($item) {
                return [
                    'id' => $item['id'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'name' => $item['name']
                ];
            }, $this->cart),
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Guest',
                'email' => auth()->user()->email ?? 'guest@example.com',
                'phone' => auth()->user()->phone ?? '08123456789',
                'billing_address' => [
                    'first_name' => auth()->user()->name ?? 'Guest',
                    'email' => auth()->user()->email ?? 'guest@example.com',
                    'phone' => auth()->user()->phone ?? '08123456789',
                    'address' => 'Default Address',
                    'city' => 'Default City',
                    'postal_code' => '12345',
                    'country_code' => 'IDN'
                ]
            ]
        ];

        try {
            $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;

            // Store order details before clearing cart
            $this->order = $this->cart;

            // Clear the cart
            $this->cart = [];
            $this->totalPrice = 0;
            session(['cart' => $this->cart]);

            // Redirect to Midtrans payment page
            $this->dispatch('open-new-tab', url: $paymentUrl);
        } catch (\Exception $e) {
            session()->flash('error', 'Payment failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
