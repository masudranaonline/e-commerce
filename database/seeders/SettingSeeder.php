<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Setting;

class SettingSeeder extends Seeder
{
    protected $model = Setting::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::factory()->count(1)->create();
    }
}
