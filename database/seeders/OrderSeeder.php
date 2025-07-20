<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample Cargo Orders
        Order::create([
            'code' => 'CRG-001',
            'service_type' => 'cargo',
            'shipping_method' => 'laut',
            'customer_name' => 'PT Maju Bersama',
            'customer_phone' => '081234567890',
            'origin_branch' => 'Jakarta',
            'destination_branch' => 'Surabaya',
            'cashier' => 'John Doe',
            'courier_pickup' => 'Ahmad',
            'courier_delivery' => 'Budi',
            'vehicle_pickup' => 'Truck-001',
            'vehicle_delivery' => 'Truck-002',
            'status' => 'pending',
            'items' => 'Barang Elektronik',
            'tracking_histories' => 'Order created',
        ]);

        Order::create([
            'code' => 'CRG-002',
            'service_type' => 'cargo',
            'shipping_method' => 'udara',
            'customer_name' => 'CV Sukses Mandiri',
            'customer_phone' => '081234567891',
            'origin_branch' => 'Bandung',
            'destination_branch' => 'Makassar',
            'cashier' => 'Jane Smith',
            'courier_pickup' => 'Charlie',
            'courier_delivery' => 'David',
            'vehicle_pickup' => 'Van-001',
            'vehicle_delivery' => 'Van-002',
            'status' => 'in_transit',
            'items' => 'Dokumen Penting',
            'tracking_histories' => 'Order created, In transit',
        ]);

        Order::create([
            'code' => 'CRG-003',
            'service_type' => 'cargo',
            'shipping_method' => 'darat',
            'customer_name' => 'UD Makmur Jaya',
            'customer_phone' => '081234567892',
            'origin_branch' => 'Semarang',
            'destination_branch' => 'Yogyakarta',
            'cashier' => 'Mike Johnson',
            'courier_pickup' => 'Eva',
            'courier_delivery' => 'Frank',
            'vehicle_pickup' => 'Truck-003',
            'vehicle_delivery' => 'Truck-004',
            'status' => 'delivered',
            'items' => 'Barang Pabrik',
            'tracking_histories' => 'Order created, In transit, Delivered',
        ]);

        // Sample Parcel Orders
        Order::create([
            'code' => 'PRC-001',
            'service_type' => 'parcel',
            'weight_kg' => 2.5,
            'customer_name' => 'Ahmad Rizki',
            'customer_phone' => '081234567893',
            'origin_branch' => 'Jakarta',
            'destination_branch' => 'Bandung',
            'cashier' => 'Sarah Wilson',
            'courier_pickup' => 'Grace',
            'courier_delivery' => 'Henry',
            'vehicle_pickup' => 'Motor-001',
            'vehicle_delivery' => 'Motor-002',
            'status' => 'pending',
            'items' => 'Paket Kecil',
            'tracking_histories' => 'Order created',
        ]);

        Order::create([
            'code' => 'PRC-002',
            'service_type' => 'parcel',
            'weight_kg' => 1.8,
            'customer_name' => 'Siti Nurhaliza',
            'customer_phone' => '081234567894',
            'origin_branch' => 'Surabaya',
            'destination_branch' => 'Malang',
            'cashier' => 'Tom Brown',
            'courier_pickup' => 'Ivy',
            'courier_delivery' => 'Jack',
            'vehicle_pickup' => 'Motor-003',
            'vehicle_delivery' => 'Motor-004',
            'status' => 'in_transit',
            'items' => 'Dokumen',
            'tracking_histories' => 'Order created, In transit',
        ]);

        Order::create([
            'code' => 'PRC-003',
            'service_type' => 'parcel',
            'weight_kg' => 5.2,
            'customer_name' => 'Budi Santoso',
            'customer_phone' => '081234567895',
            'origin_branch' => 'Medan',
            'destination_branch' => 'Palembang',
            'cashier' => 'Lisa Davis',
            'courier_pickup' => 'Kate',
            'courier_delivery' => 'Leo',
            'vehicle_pickup' => 'Van-003',
            'vehicle_delivery' => 'Van-004',
            'status' => 'delivered',
            'items' => 'Paket Menengah',
            'tracking_histories' => 'Order created, In transit, Delivered',
        ]);
    }
} 