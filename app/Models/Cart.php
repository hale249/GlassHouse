<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'client_id',
        'status',
        'vat',
        'ship_price',
        'total',
        'note',
    ];

    protected function cartDetails(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'cart_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'client_id', 'id');
    }
}
