<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartDetail extends Model
{
    protected $table = 'cart_details';

    protected $guarded = [];

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
