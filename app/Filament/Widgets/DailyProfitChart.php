<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Filament\Forms\Components\Select;

class DailyProfitChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Keuntungan Harian';

    public ?string $filter;

    protected function getFilters(): ?array
    {
        $months = [];
        for ($i = 0; $i < 12; $i++) {
            $date = Carbon::now()->subMonths($i);
            $months[$date->format('Y-m')] = $date->format('F Y');
        }
        return $months;
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter ?? array_key_first($this->getFilters());
        $selectedMonth = Carbon::parse($activeFilter);
        $startDate = $selectedMonth->copy()->startOfMonth();
        $endDate = $selectedMonth->copy()->endOfMonth();

        $orders = Order::where('status', 'completed')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('created_at', 'total_amount')
            ->get()
            ->groupBy(function ($order) {
                return Carbon::parse($order->created_at)->format('d');
            });

        $dailyProfits = [];
        $dailyOrderCounts = [];
        for ($day = 1; $day <= $endDate->day; $day++) {
            $dayStr = str_pad($day, 2, '0', STR_PAD_LEFT);
            $dailyProfits[$dayStr] = 0;
            $dailyOrderCounts[$dayStr] = 0;
        }

        foreach ($orders as $day => $orderGroup) {
            $dailyProfits[$day] = $orderGroup->sum('total_amount');
            $dailyOrderCounts[$day] = $orderGroup->count();
        }

        ksort($dailyProfits);
        ksort($dailyOrderCounts);

        return [
            'datasets' => [
                [
                    'label' => 'Total Keuntungan',
                    'data' => array_values($dailyProfits),
                    'yAxisID' => 'profit',
                ],
                [
                    'label' => 'Pesanan Selesai',
                    'data' => array_values($dailyOrderCounts),
                    'yAxisID' => 'orders',
                ],
            ],
            'labels' => array_keys($dailyProfits),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'profit' => [
                    'type' => 'linear',
                    'position' => 'left',
                    'ticks' => [
                        'callback' => 'function(value) { return "Rp " + new Intl.NumberFormat("id-ID").format(value); }',
                    ],
                ],
                'orders' => [
                    'type' => 'linear',
                    'position' => 'right',
                    'grid' => [
                        'drawOnChartArea' => false,
                    ],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
