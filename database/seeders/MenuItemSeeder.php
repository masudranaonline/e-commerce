<?php

namespace Database\Seeders;

use App\Models\Admin\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    protected $model = MenuItem::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::factory()->count(5)->create();
    }
}
