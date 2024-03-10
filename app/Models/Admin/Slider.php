<?php

namespace App\Models\Admin;

use App\Models\SliderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
    ];

    public function slideritems() 
    {
        return $this->hasMany(SliderItem::class);
    }
}
