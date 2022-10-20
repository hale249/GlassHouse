<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlassType extends Model
{
    protected $table = 'glass_types';

    protected $fillable = [
        'name', 'is_active', 'created_by'
    ];
}
