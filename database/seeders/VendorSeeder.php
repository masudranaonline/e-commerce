<?php

namespace Database\Seeders;

use App\Models\Admin\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    protected $model = Vendor::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::factory()->count(10)->create();
    }
}
