<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAccessory extends Model
{
    protected $table = 'product_accessories';

    protected $fillable = [
        'product_id', 'accessory_id'
    ];
}
