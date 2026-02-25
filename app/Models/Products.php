<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // Tell Laravel which columns are safe to fill
    protected $fillable = [
        'name',
        'price',
        'description',
        'image_path'
    ];
}