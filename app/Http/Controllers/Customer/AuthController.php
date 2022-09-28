<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('customer.elements.login');
    }

    public function login()
    {

    }

    public function register()
    {

    }
}
