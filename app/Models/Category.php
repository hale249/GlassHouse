<?php

namespace App\Models;

use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, Slug;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'image',
        'description',
        'is_disabled'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'is_disabled' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
