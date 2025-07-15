<div>
    @if (in_array($order->status, ['pending', 'challenge', 'processing']))
        <button onclick="window.location.reload()"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Refresh Status
        </button>
    @endif
    @if ($order->status == 'pending')
        <button wire:click="repay"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            Bayar Sekarang
        </button>
    @endif
</div>