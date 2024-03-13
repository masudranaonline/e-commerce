<?php

namespace Database\Seeders;

use App\Models\Admin\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    protected $model = Product::class;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(20)->create();
    }
}
