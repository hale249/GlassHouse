<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $table = 'carts';

    protected $guarded = [];

    protected function cartDetails(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'cart_id', 'id');
    }
}
