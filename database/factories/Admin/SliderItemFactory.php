<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SliderItem>
 */
class SliderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slider_id'     => Slider::all()->random()->id,
            'title'         => $this->faker->sentence(),
            'description'   => $this->faker->paragraph(),
            'image'         => $this->faker->imageUrl(),
            'link'          => $this->faker->url(),
            
        ];
    }
}
