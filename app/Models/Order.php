<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\BranchScopeTrait;

class Order extends Model
{
    use HasFactory, BranchScopeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'service_type',
        'shipping_method',
        'weight_kg',
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
            'weight_kg' => 'decimal:2',
        ];
    }

    /**
     * Get the service type options.
     */
    public static function getServiceTypeOptions(): array
    {
        return [
            'cargo' => 'Cargo',
            'parcel' => 'Parcel',
        ];
    }

    /**
     * Get the shipping method options.
     */
    public static function getShippingMethodOptions(): array
    {
        return [
            'laut' => 'Laut',
            'udara' => 'Udara',
            'darat' => 'Darat',
        ];
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
