<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\OrderItem;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order' => fake()->word(),
            'name' => fake()->name(),
            'quantity' => fake()->numberBetween(-10000, 10000),
            'condition' => fake()->word(),
            'checker' => fake()->word(),
        ];
    }
}
