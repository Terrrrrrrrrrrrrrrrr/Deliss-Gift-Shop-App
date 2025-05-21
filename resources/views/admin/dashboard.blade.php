@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md text-sm">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <div class="flex space-x-2">
                <button class="flex items-center bg-gray-100 hover:bg-gray-200 px-3 py-1.5 rounded text-sm">
                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9M9 9h11m0 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Refresh
                </button>
                <button class="flex items-center bg-gray-100 hover:bg-gray-200 px-3 py-1.5 rounded text-sm">
                    <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Export
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <!-- Summary Cards -->
            @foreach ([['Total Accounts', number_format($totalAccounts), 'text-red-500', 'accounts'], ['Total Sales', number_format($totalSales), 'text-blue-500', 'sales'], ['Total Revenue', '₱' . number_format($totalRevenue, 2), 'text-green-500', 'revenue']] as [$label, $value, $iconClass, $type])
                <div class="bg-white p-4 rounded-lg border border-gray-200 flex justify-between items-center text-sm">
                    <div>
                        <h3 class="font-semibold text-gray-700">{{ $label }}:</h3>
                        <p class="text-2xl font-bold">{{ $value }}</p>
                    </div>
                    <div class="{{ $iconClass }}">
                        @if ($type === 'accounts')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        @elseif ($type === 'sales')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1" />
                            </svg>
                        @elseif ($type === 'revenue')
                            <div class="h-12 w-12 pb-4 flex items-center justify-center text-5xl text-green-500 font-bold">
                                ₱
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach
        </div>


        <div class="mb-6">
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-xl font-bold">Monthly Sales</h2>
            </div>

            @if (count($monthlySalesData['labels']) === count($monthlySalesData['data']) && count($monthlySalesData['data']) > 1)
                <div class="border border-gray-200 rounded-lg p-2 h-[250px] relative">
                    <svg viewBox="0 0 1000 250" class="w-full h-full">
                        @php
                            $maxValue = $monthlySalesData['max'] ?? 1;
                            $yStep = ceil($maxValue / 4);
                            $yScale = 200 / $maxValue;
                            $xCount = count($monthlySalesData['labels']);
                            $xStep = $xCount > 1 ? (900 / ($xCount - 1)) : 0;

                            $points = [];
                            foreach ($monthlySalesData['data'] as $i => $value) {
                                $x = 80 + $i * $xStep;
                                $y = 200 - ($value * $yScale) + 30;
                                $points[] = "$x,$y";
                            }
                        @endphp

                            <!-- Y-axis labels -->
                        @foreach (range(1, 4) as $i)
                            <text x="10" y="{{ 30 + ($i - 1) * 50 }}" font-size="12">{{ $yStep * (5 - $i) }}</text>
                        @endforeach

                        <!-- X-axis labels -->
                        @foreach ($monthlySalesData['labels'] as $i => $month)
                            <text x="{{ 80 + $i * $xStep }}" y="240" font-size="12" text-anchor="middle">{{ $month }}</text>
                        @endforeach

                        <!-- Grid lines -->
                        @foreach (range(1, 4) as $i)
                            <line x1="70" y1="{{ 30 + ($i - 1) * 50 }}" x2="980" y2="{{ 30 + ($i - 1) * 50 }}" stroke="#ddd" stroke-dasharray="2,2"/>
                        @endforeach

                        <!-- Line path -->
                        <polyline
                            fill="none"
                            stroke="black"
                            stroke-width="2"
                            points="{{ implode(' ', $points) }}"
                        />

                        <!-- Data points -->
                        @foreach ($points as $pt)
                            @php [$x, $y] = explode(',', $pt); @endphp
                            <circle cx="{{ $x }}" cy="{{ $y }}" r="3" fill="black" />
                        @endforeach
                    </svg>
                </div>
            @else
                <div class="border border-gray-200 rounded-lg p-4 text-center text-gray-500">
                    Monthly sales data is not available or incomplete.
                </div>
            @endif
        </div>


        <!-- Notifications -->
        <div>
            <h2 class="text-xl font-bold mb-2">Notifications</h2>
            <div class="border border-gray-200 rounded-lg p-3 min-h-[80px]">
                @if(count($notifications))
                    <ul class="space-y-2 text-sm">
                        @foreach($notifications as $notification)
                            <li class="p-2 hover:bg-gray-50 rounded-md">
                                <div class="font-medium">{{ $notification->title }}</div>
                                <div class="text-gray-600">{{ $notification->message }}</div>
                                <div class="text-gray-400 text-xs mt-1">{{ $notification->created_at->diffForHumans() }}</div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500">No new notifications.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
