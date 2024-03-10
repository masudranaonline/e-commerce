<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'menu_id'       => Menu::all()->random()->id,
            'title'         => $this->faker->sentence(),
            'link'          => $this->faker->sentence(),
            'target'        => $this->faker->sentence(),
            'parents'       => $this->faker->sentence(),
            
        ];
    }
}
