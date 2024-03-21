<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    public const PLACEHOLDER_IMAGE_PATH = 'Images/placeholder.jpeg';

    protected $fillable = [
        'category_id',
        'brand_id',
        'vendor_id',
        'title',
        'description',
        'cost_price',
        'sale_price',
        'quantity',
        'min_quantity',
        'sizes',
        'colors',
        'warranty',
        'status',
        'created_by',
        'updated_by',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // public function getImageUrlAttribute(): string
    // {
    //     // return $this->getFirstMediaUrl();
    //     return $this->hasMedia()
    //     ? $this->getFirstMediaUrl()
    //     : self::PLACEHOLDER_IMAGE_PATH;
    // }

    public function getImageUrlAttribute(): string
    {
        return $this->hasMedia()
            ? $this->getFirstMediaUrl()
            : asset(self::PLACEHOLDER_IMAGE_PATH);
    }
}
