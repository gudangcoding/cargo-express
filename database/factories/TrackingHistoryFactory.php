<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TrackingHistory;

class TrackingHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrackingHistory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order' => fake()->word(),
            'status' => fake()->word(),
            'location' => fake()->word(),
            'checked_by' => fake()->word(),
            'checked_at' => fake()->dateTime(),
            'notes' => fake()->word(),
        ];
    }
}
