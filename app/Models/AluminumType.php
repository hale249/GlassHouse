<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AluminumType extends Model
{
    protected $table = 'aluminum_types';

    protected $fillable = [
        'name', 'images', 'is_active', 'created_by', 'description'
    ];
}
