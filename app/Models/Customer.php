<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'clients';

    public $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
    ];
}
