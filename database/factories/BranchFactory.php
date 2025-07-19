<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Branch;

class BranchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Branch::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->word(),
            'city' => fake()->city(),
            'province' => fake()->word(),
            'subdistrict' => fake()->word(),
            'village' => fake()->word(),
            'warehouses' => fake()->word(),
            'cashiers' => fake()->word(),
            'couriers' => fake()->word(),
            'vehicles' => fake()->word(),
        ];
    }
}
