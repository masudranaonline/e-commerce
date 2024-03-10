<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            SettingSeeder::class,
            SliderSeeder::class,
            SliderItemSeeder::class,
            MenuSeeder::class,
            MenuItemSeeder::class,
        ]);
    }
}
