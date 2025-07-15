<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class RepayOrder extends Component
{
    public Order $order;

    public function repay()
    {
        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        try {
            $paymentUrl = null;

            // Jika order memiliki snap_token, gunakan itu untuk redirect
            if ($this->order->snap_token) {
                $paymentUrl = 'https://app.sandbox.midtrans.com/snap/v2/vtweb/'.$this->order->snap_token;
            } else {
                // Jika tidak ada snap_token (misal, order dibuat sebelum fitur ini), buat transaksi baru
                $params = [
                    'transaction_details' => [
                        'order_id' => $this->order->order_number,
                        'gross_amount' => $this->order->total_amount,
                    ],
                    'item_details' => $this->order->orderItems->map(function ($item) {
                        return [
                            'id' => $item->product->id,
                            'price' => $item->price,
                            'quantity' => $item->quantity,
                            'name' => $item->product->name,
                        ];
                    })->toArray(),
                    'customer_details' => [
                        'first_name' => $this->order->user->name ?? 'Guest',
                        'email' => $this->order->user->email ?? 'guest@example.com',
                        'phone' => $this->order->user->phone ?? '08123456789',
                        'billing_address' => [
                            'first_name' => $this->order->user->name ?? 'Guest',
                            'email' => $this->order->user->email ?? 'guest@example.com',
                            'phone' => $this->order->user->phone ?? '08123456789',
                            'address' => 'Default Address',
                            'city' => 'Default City',
                            'postal_code' => '12345',
                            'country_code' => 'IDN',
                        ],
                    ],
                ];
                $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
                // Simpan snap_token yang baru dibuat ke order
                $this->order->snap_token = \Midtrans\Snap::createTransaction($params)->token;
                $this->order->save();
            }

            $this->dispatch('open-new-tab', url: $paymentUrl);
        } catch (\Exception $e) {
            $this->dispatch('show-message', type: 'error', message: 'Pembayaran gagal: '.$e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.repay-order');
    }
}
