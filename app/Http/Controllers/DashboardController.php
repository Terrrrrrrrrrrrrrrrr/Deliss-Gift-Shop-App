<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page with analytics data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            // Initialize default values in case of errors
            $totalAccounts = 0;
            $totalSales = 0;
            $totalRevenue = 0;
            $monthlySalesData = [
                'labels' => [],
                'data' => [],
                'max' => 1

            ];
            $notifications = [];

            // Get analytics data with error handling
            if (class_exists('App\Models\Account')) {
                $totalAccounts = Account::count();
            }

            if (class_exists('App\Models\Order')) {
                $totalSales = Order::count();
                $totalRevenue = Order::sum('total');

                // Get monthly sales data for chart
                $monthlySalesData = $this->getMonthlySalesData();
            }

            // Get notifications
            if (class_exists('App\Models\Notification')) {
                $notifications = Notification::latest()->take(5)->get();
            }
        } catch (\Exception $e) {
            // Log the error
            Log::error('Dashboard data error: ' . $e->getMessage());

            // Set default values in case of error
            $totalAccounts = 0;
            $totalSales = 0;
            $totalRevenue = 0;
            $monthlySalesData = [
                'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                'data' => [0, 0, 0, 0, 0, 0, 0, 0],
            ];
            $notifications = [];
        }

        // Always ensure these variables are defined
        return view('pages.dashboard', compact(
            'totalAccounts',
            'totalSales',
            'totalRevenue',
            'monthlySalesData',
            'notifications'
        ));
    }

    /**
     * Get monthly sales data for the chart.
     *
     * @return array
     */
    private function getMonthlySalesData()
    {
        $startDate = Carbon::now()->subMonths(7)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        $salesData = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('COUNT(*) as total_sales')
        )
        ->whereBetween('created_at', [$startDate, $endDate])
        ->groupBy('year', 'month')
        ->orderBy('year')
        ->orderBy('month')
        ->get();

        $labels = [];
        $data = [];

        $currentDate = clone $startDate;
        while ($currentDate <= $endDate) {
            $monthKey = (int)$currentDate->format('n');
            $yearKey = (int)$currentDate->format('Y');
            $monthName = $currentDate->format('M');

            $labels[] = $monthName;

            $monthData = $salesData->first(function ($item) use ($monthKey, $yearKey) {
                return $item->month == $monthKey && $item->year == $yearKey;
            });

            $data[] = $monthData ? $monthData->total_sales : 0;

            $currentDate->addMonth();
        }
         // Safe max calculation
        $maxSales = 1; // default if no sales
        if (!empty($data)) {
            $maxSales = max($data);
            if ($maxSales <= 0) {
                $maxSales = 1;
            }
        }
        $maxSales = max($data) ?: 1;

        return [
            'labels' => $labels,
            'data' => $data,
            'max' => $maxSales,
        ];
    }
}
