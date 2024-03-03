<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'description',
        'image',
        'custom_price',
        'salse_price',
        'quantity',
        'minimum_quantity',
        'sizes',
        'colors',
        'warranty',
    ];
}
