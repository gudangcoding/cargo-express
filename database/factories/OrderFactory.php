<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => fake()->word(),
            'customer_name' => fake()->word(),
            'customer_phone' => fake()->word(),
            'origin_branch' => fake()->word(),
            'destination_branch' => fake()->word(),
            'cashier' => fake()->word(),
            'courier_pickup' => fake()->word(),
            'courier_delivery' => fake()->word(),
            'vehicle_pickup' => fake()->word(),
            'vehicle_delivery' => fake()->word(),
            'status' => fake()->word(),
            'items' => fake()->word(),
            'tracking_histories' => fake()->word(),
        ];
    }
}
