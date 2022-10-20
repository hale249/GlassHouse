<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGlass extends Model
{
    protected $table = 'product_glasses';

    protected $fillable = [
        'product_id', 'glass_id'
    ];
}
