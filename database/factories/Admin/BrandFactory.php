<?php

namespace Database\Factories\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => $this->faker->sentence(),
            'description'   => $this->faker->paragraph(),
            'status'        => $this->faker->boolean(90),
            'created_by'    => User::all()->random()->id,
            'updated_by'    => User::all()->random()->id,
            'created_at'    => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at'    => $this->faker->dateTimeBetween('-1 year', 'now'),

        ];
    }
}
