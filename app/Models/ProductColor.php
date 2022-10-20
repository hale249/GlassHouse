<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAluminum extends Model
{
    protected $table = 'product_aluminums';

    protected $fillable = [
        'product_id', 'aluminum_id'
    ];
}
