<!doctype html>
<html class="scroll-smooth">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Detail Pesanan</title>

	@vite('resources/css/app.css', 'resources/js/app.js')
	@filamentStyles
</head>

<body class="bg-orange-50">
	<x-layouts.header />

	<div class="container mx-auto px-4 py-8">
		<div x-data="{ show: false, message: '', type: '' }" x-show="show" x-transition.opacity
			x-on:show-message.window="show = true; message = $event.detail.message; type = $event.detail.type; setTimeout(() => show = false, 3000)"
			:class="{ 'bg-green-100 border-green-400 text-green-700': type === 'success', 'bg-red-100 border-red-400 text-red-700': type === 'error' }"
			class="border px-4 py-3 rounded relative mb-4 mt-16 z-50" role="alert">
			<span class="block sm:inline" x-text="message"></span>
		</div>
		<h1 class="text-2xl font-bold mb-6">Detail Pesanan #{{ $order->order_number }}</h1>

		<div class="bg-white rounded-lg shadow overflow-hidden p-6">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
				<div>
					<h2 class="text-lg font-semibold mb-2">Informasi Pelanggan</h2>
					<p><strong>Nama:</strong> {{ $order->user->name ?? 'N/A' }}</p>
					<p><strong>Email:</strong> {{ $order->user->email ?? 'N/A' }}</p>
				</div>
				<div>
					<h2 class="text-lg font-semibold mb-2">Detail Pesanan</h2>
					<p><strong>Nomor Pesanan:</strong> {{ $order->order_number }}</p>
					<p><strong>Tanggal:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
					<p><strong>Status:</strong>
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
                                        return 'bg-gray-100 text-gray-800';
                                }
                            }
                        }" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
							:class="getStatusClasses()">
							{{ ucfirst($order->status) }}
						</span>
					</p>
					<p><strong>Total Pembayaran:</strong> Rp{{ number_format($order->total_amount, 0, ',', '.') }}</p>
				</div>
			</div>

			<h2 class="text-lg font-semibold mb-2">Item Pesanan</h2>
			<table class="min-w-full divide-y divide-gray-200 mb-6">
				<thead class="bg-gray-50">
					<tr>
						<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							Produk</th>
						<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga
							Satuan</th>
						<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							Jumlah</th>
						<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
							Subtotal</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200">
					@forelse($order->orderItems as $item)
						<tr>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
								{{ $item->product->name ?? 'Produk Tidak Ditemukan' }}
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
								Rp{{ number_format($item->price, 0, ',', '.') }}</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->quantity }}</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
								Rp{{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
						</tr>
					@empty
						<tr>
							<td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">Tidak ada
								item dalam pesanan ini.</td>
						</tr>
					@endforelse
				</tbody>
			</table>

			<div class="text-right font-bold text-xl">
				Total Keseluruhan: Rp{{ number_format($order->total_amount, 0, ',', '.') }}
			</div>
		</div>

		<div class="mt-6">
			<div class="flex justify-between items-center" x-data="{}"
				x-on:refresh-order-detail.window="location.reload()">
				<a href="{{ route('pesanan-saya') }}"
					class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
					&larr; Kembali ke Daftar Pesanan
				</a>
				<div class="flex space-x-2">
					<livewire:repay-order :order="$order" />
				</div>
			</div>
		</div>
	</div>

</body>

</html>