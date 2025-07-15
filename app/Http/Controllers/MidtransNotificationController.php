<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransNotificationController extends Controller
{
    public function handle(Request $request)
    {
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $notification = new Notification;

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;
        $fraudStatus = $notification->fraud_status;

        $order = Order::where('order_number', $orderId)->first();

        if (! $order) {
            return response()->json(['message' => 'Order not found.'], 404);
        }

        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'challenge') {
                $order->status = 'challenge';
            } elseif ($fraudStatus == 'accept') {
                $order->status = 'completed';
            }
        } elseif ($transactionStatus == 'settlement') {
            $order->status = 'completed';
        } elseif ($transactionStatus == 'pending') {
            $order->status = 'pending';
        } elseif ($transactionStatus == 'deny') {
            $order->status = 'failed';
        } elseif ($transactionStatus == 'expire') {
            $order->status = 'expired';
        } elseif ($transactionStatus == 'cancel') {
            $order->status = 'cancelled';
        }

        $order->save();

        return response()->json(['message' => 'OK']);
    }
}
