<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $completedOrders = Order::where('status', 'completed')->get();
        $profit = $completedOrders->sum('total_amount');
        $totalProducts = Product::count();

        return [
            Stat::make('Keuntungan', 'Rp ' . number_format($profit, 0, ',', '.'))
                ->description('Total Keuntungan')
                ->color('success'),
            Stat::make('Total Order Completed', $completedOrders->count())
                ->description('Total Order Selesai')
                ->color('primary'),
            Stat::make('Total Produk', $totalProducts)
                ->description('Total Produk')
                ->color('info'),
        ];
    }
}
