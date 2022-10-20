<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table = 'accessories';

    protected $fillable = [
        'name', 'is_active', 'created_by'
    ];
}
