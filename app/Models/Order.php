<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'customer_name',
        'customer_phone',
        'origin_branch',
        'destination_branch',
        'cashier',
        'courier_pickup',
        'courier_delivery',
        'vehicle_pickup',
        'vehicle_delivery',
        'status',
        'items',
        'tracking_histories',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
        ];
    }
}
