<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('order', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('order-detail', compact('order'));
    }
}
