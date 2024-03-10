<?php

namespace App\Models\Admin;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SliderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'slider_id',
        'title',
        'description',
        'image',
        'link',
    ];

    public function slider() 
    {
        return $this->belongsTo(Slider::class);
    }
}
