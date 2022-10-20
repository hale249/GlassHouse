<?php

namespace App\Models;

use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, Slug;

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'slug',
        'image',
        'description_short',
        'description',
        'price',
        'quantity',
        'is_disabled'
    ];

    protected $casts = [
        'category_id' => 'integer',
        'user_id' => 'integer',
        'price' => 'double',
        'quantity' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productAccessories(): HasMany
    {
        return $this->hasMany(ProductAccessory::class, 'product_id', 'id');
    }

    public function productAluminums(): HasMany
    {
        return $this->hasMany(ProductAluminum::class, 'product_id', 'id');
    }

    public function productColors(): HasMany
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

    public function productGlass(): HasMany
    {
        return $this->hasMany(ProductGlass::class, 'product_id', 'id');
    }
}
