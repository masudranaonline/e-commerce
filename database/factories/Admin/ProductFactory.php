<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::all()->random()->id,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'cost_price' => $this->faker->randomFloat(5, 0, 1000),
            'sale_price' => $this->faker->randomFloat(5, 0, 1000),
            'quantity' => $this->faker->randomNumber(),
            'min_quantity' => $this->faker->randomNumber(),
            'sizes' => $this->faker->sentence(),
            'colors' => $this->faker->sentence(),
            'warranty' => $this->faker->sentence(),
            'status' => $this->faker->boolean(90),
            'created_by' => User::all()->random()->id,
            'updated_by' => User::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
