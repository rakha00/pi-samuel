<?php

namespace App\Http\Controllers;

use App\Models\MidtransPendingTransaction;
use App\Models\Order;
use App\Models\OrderItem;
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

        try {
            $notification = new Notification;
            $transactionStatus = $notification->transaction_status;
            $orderId = $notification->order_id;
            $fraudStatus = $notification->fraud_status;

            $order = Order::where('order_number', $orderId)->first();

            // Jika order belum ada (pertama kali notifikasi), buat order baru
            if (! $order) {
                $pendingTransaction = MidtransPendingTransaction::where('order_number', $orderId)->first();

                if (! $pendingTransaction) {
                    return response()->json(['message' => 'Pending transaction data not found.'], 404);
                }

                try {
                    $order = Order::create([
                        'user_id' => $pendingTransaction->user_id,
                        'order_number' => $orderId,
                        'total_amount' => $pendingTransaction->total_amount,
                        'status' => 'pending', // Status awal, akan diperbarui di bawah
                        'snap_token' => $pendingTransaction->snap_token,
                    ]);

                    $cartItems = json_decode($pendingTransaction->cart_items, true);
                    foreach ($cartItems as $item) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $item['id'],
                            'quantity' => $item['quantity'],
                            'price' => $item['price'],
                        ]);
                    }

                    // Hapus data pending transaction setelah order dibuat
                    $pendingTransaction->delete();
                    \Log::info("Order ID {$orderId} created successfully from pending transaction data. Pending transaction deleted.");
                } catch (\Exception $e) {
                    \Log::error("Error creating order {$orderId} from pending transaction: ".$e->getMessage(), ['exception' => $e]);

                    return response()->json(['message' => 'Error creating order.'], 500);
                }
            } else {
                \Log::info("Order ID {$orderId} found in DB, updating status.");
            }

            // Update status order berdasarkan notifikasi
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
        } catch (\Exception $e) {

            return response()->json(['message' => 'Internal Server Error.'], 500);
        }
    }
}
