<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @filamentStyles
</head>

<body class="bg-orange-50">
    <x-layouts.header />

    <div class="container mx-auto px-4 pt-28 py-8">
        <div x-data="{ show: false, message: '', type: '' }" x-show="show" x-transition.opacity
            x-on:show-message.window="show = true; message = $event.detail.message; type = $event.detail.type; setTimeout(() => show = false, 3000)"
            :class="{ 'bg-green-100 border-green-400 text-green-700': type === 'success', 'bg-red-100 border-red-400 text-red-700': type === 'error' }"
            class="border px-4 py-3 rounded relative mb-4 mt-16 z-50" role="alert">
            <span class="block sm:inline" x-text="message"></span>
        </div>
        <h1 class="text-2xl font-bold mb-6">Pesanan Saya</h1>

        <div class="bg-white rounded-lg shadow overflow-hidden overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No.
                            Pesanan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($orders as $order)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">#{{ $order->order_number }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ $order->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">Rp
                                {{ number_format($order->total_amount, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4">
                                <span x-data="{
                                                                            getStatusClasses() {
                                                                                switch ('{{ $order->status }}') {
                                                                                    case 'pending':
                                                                                        return 'bg-yellow-100 text-yellow-800';
                                                                                    case 'processing':
                                                                                        return 'bg-blue-100 text-blue-800';
                                                                                    case 'completed':
                                                                                        return 'bg-green-100 text-green-800';
                                                                                    case 'failed':
                                                                                        return 'bg-red-100 text-red-800';
                                                                                    case 'expired':
                                                                                        return 'bg-purple-100 text-purple-800';
                                                                                    case 'cancelled':
                                                                                        return 'bg-gray-100 text-gray-800';
                                                                                    default:
                                                                                        return 'bg-red-100 text-red-800';
                                                                                }
                                                                            }
                                                                        }"
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                                    :class="getStatusClasses()">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @if ($order->status == 'pending')
                                    <a href="{{ route('orders.show', $order->id) }}"
                                        class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Bayar Sekarang
                                    </a>
                                @else
                                    <a href="{{ route('orders.show', $order->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-sm text-gray-500 text-center">
                                Belum ada pesanan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    </div>

</body>

</html>