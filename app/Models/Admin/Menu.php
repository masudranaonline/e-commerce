<?php

namespace App\Models\Admin;

use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    public function menuitems() 
    {
        return $this->hasMany(MenuItem::class);
    }
}
