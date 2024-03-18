<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('vendor_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->float('cost_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('min_quantity')->nullable();
            $table->string('sizes')->nullable();
            $table->string('colors')->nullable();
            $table->string('warranty')->nullable();

            $table->string('created_by')->nullable()->onDelete('set null');
            $table->string('updated_by')->nullable()->onDelete('set null');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
