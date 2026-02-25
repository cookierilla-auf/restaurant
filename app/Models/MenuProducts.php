<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuProducts extends Model
{
    // Disable timestamps since your migration doesn't have them
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'menu_id'
    ];
}