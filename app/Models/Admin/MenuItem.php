<?php

namespace App\Models;

use App\Models\Admin\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'title',
        'link',
        'target',
        'parents',
    ];

    public function menu() {
        return $this->belongsTo(Menu::class);
    }
}

