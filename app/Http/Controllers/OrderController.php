<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $cargoOrders = Order::where('service_type', 'cargo')->latest()->get();
        $parcelOrders = Order::where('service_type', 'parcel')->latest()->get();
        
        return view('orders.index', compact('cargoOrders', 'parcelOrders'));
    }

    public function cargo()
    {
        $orders = Order::where('service_type', 'cargo')->latest()->get();
        return view('orders.cargo', compact('orders'));
    }

    public function parcel()
    {
        $orders = Order::where('service_type', 'parcel')->latest()->get();
        return view('orders.parcel', compact('orders'));
    }
} 