<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'customers';
    protected $table = 'clients';

    public $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
    ];
}
