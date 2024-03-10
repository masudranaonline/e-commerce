<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'site_name'     => $this->faker->sentence(),
            'site_description' => $this->faker->paragraph(),
            'site_logo'     => $this->faker->imageUrl(),
            'email'         => $this->faker->email(),
            'phone'         => $this->faker->phoneNumber(),
            'whatsapp'      => $this->faker->phoneNumber(),
            'address'       => $this->faker->address(),
            'facebook'      => $this->faker->url(),
            'twitter'       => $this->faker->url(),
            'instagram'     => $this->faker->url(),
            'youtube'       => $this->faker->url(),
            'linkedin'      => $this->faker->url(),
            'map'           => $this->faker->url(),
            'copyright'     => $this->faker->sentence(),
            'language'      => $this->faker->languageCode(),

        ];
    }
}
