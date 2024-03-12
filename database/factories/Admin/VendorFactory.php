<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
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
            'company_name'  => $this->faker->sentence(),
            'phone'         => $this->faker->phoneNumber(),
            'email'         => $this->faker->email(),
            
        ];
    }
}
