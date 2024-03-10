<?php

namespace Database\Seeders;

use App\Models\Admin\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    protected $model = Menu::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::factory()->count(5)->create();
    }
}
