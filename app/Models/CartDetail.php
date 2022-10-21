<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartDetail extends Model
{
    protected $table = 'cart_details';

    protected $fillable = [
        'cart_id',
        'product_id',
        'product_image_id',
        'quantity',
        'product_color_id',
        'product_glass_id',
        'product_aluminum_id',
        'product_accessory_id',
        'product_longs',
        'product_width',
        'price',
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'product_color_id', 'id');
    }

    public function accessory()
    {
        return $this->belongsTo(Accessory::class, 'product_accessory_id', 'id');
    }

    public function glassType()
    {
        return $this->belongsTo(GlassType::class, 'product_glass_id', 'id');
    }

    public function aluminums()
    {
        return $this->belongsTo(AluminumType::class, 'product_aluminum_id', 'id');
    }
}
