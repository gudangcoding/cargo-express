<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Express - Orders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-blue-600 text-white shadow-lg">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <i class="fas fa-shipping-fast text-2xl mr-3"></i>
                        <h1 class="text-2xl font-bold">Cargo Express</h1>
                    </div>
                    <nav class="hidden md:flex space-x-6">
                        <a href="#" class="hover:text-blue-200 transition">Dashboard</a>
                        <a href="#" class="hover:text-blue-200 transition">Orders</a>
                        <a href="#" class="hover:text-blue-200 transition">Reports</a>
                        <a href="#" class="hover:text-blue-200 transition">Settings</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-8">
            <!-- Page Title -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Order Management</h2>
                <p class="text-gray-600">Kelola pesanan cargo dan parcel Anda</p>
            </div>

            <!-- Service Type Cards -->
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Cargo Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-ship text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Cargo Service</h3>
                            <p class="text-gray-600">Pengiriman dengan pilihan laut, udara, dan darat</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Laut - Kapal Kargo</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Udara - Pesawat Kargo</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Darat - Truck Kargo</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">{{ $cargoOrders->count() }}</span>
                        <span class="text-gray-600">Total Orders</span>
                    </div>
                    <a href="{{ route('orders.cargo') }}" class="block mt-4 bg-blue-600 text-white text-center py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                        Lihat Cargo Orders
                    </a>
                </div>

                <!-- Parcel Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-box text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Parcel Service</h3>
                            <p class="text-gray-600">Pengiriman satuan dengan berat dalam kg</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Pengiriman Satuan</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Berat dalam Kilogram</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span>Layanan Cepat</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-green-600">{{ $parcelOrders->count() }}</span>
                        <span class="text-gray-600">Total Orders</span>
                    </div>
                    <a href="{{ route('orders.parcel') }}" class="block mt-4 bg-green-600 text-white text-center py-2 px-4 rounded-lg hover:bg-green-700 transition">
                        Lihat Parcel Orders
                    </a>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Orders</h3>
                
                <!-- Cargo Orders -->
                <div class="mb-6">
                    <h4 class="text-lg font-medium text-blue-600 mb-3">Recent Cargo Orders</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Method</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($cargoOrders->take(3) as $order)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $order->code }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $order->customer_name }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                            @if($order->shipping_method === 'laut') bg-blue-100 text-blue-800
                                            @elseif($order->shipping_method === 'udara') bg-green-100 text-green-800
                                            @else bg-orange-100 text-orange-800
                                            @endif">
                                            {{ ucfirst($order->shipping_method) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                            @if($order->status === 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($order->status === 'in_transit') bg-blue-100 text-blue-800
                                            @else bg-green-100 text-green-800
                                            @endif">
                                            {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at->format('d M Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-2 text-center text-sm text-gray-500">No cargo orders found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Parcel Orders -->
                <div>
                    <h4 class="text-lg font-medium text-green-600 mb-3">Recent Parcel Orders</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Weight</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($parcelOrders->take(3) as $order)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $order->code }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $order->customer_name }}</td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $order->weight_kg }} kg</td>
                                    <td class="px-4 py-2 whitespace-nowrap">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                            @if($order->status === 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($order->status === 'in_transit') bg-blue-100 text-blue-800
                                            @else bg-green-100 text-green-800
                                            @endif">
                                            {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">{{ $order->created_at->format('d M Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-2 text-center text-sm text-gray-500">No parcel orders found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-6 mt-12">
            <div class="container mx-auto px-6 text-center">
                <p>&copy; 2024 Cargo Express. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html> 