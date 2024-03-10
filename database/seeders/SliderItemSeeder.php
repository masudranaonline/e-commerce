<?php

namespace Database\Seeders;

use App\Models\Admin\SliderItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderItemSeeder extends Seeder
{
    protected $model = SliderItem::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SliderItem::factory()->count(5)->create();
    }
}
