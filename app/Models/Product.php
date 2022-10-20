<?php

namespace App\Models;

use App\Models\Traits\Slug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'is_active'
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

    public function productAccessories(): BelongsToMany
    {
        return $this->belongsToMany(Accessory::class, ProductAccessory::class, 'product_id', 'accessory_id');
    }

    public function productAluminums(): BelongsToMany
    {
        return $this->belongsToMany(AluminumType::class, ProductAluminum::class, 'product_id', 'aluminum_id');
    }

    public function productColors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class, ProductColor::class, 'product_id', 'color_id');
    }

    public function productGlass(): BelongsToMany
    {
        return $this->belongsToMany(GlassType::class, ProductGlass::class, 'product_id', 'glass_id');
    }
}
