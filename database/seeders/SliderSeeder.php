<?php

namespace Database\Seeders;

use App\Models\Admin\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    protected $model = Slider::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::factory()->count(5)->create();
    }
}
