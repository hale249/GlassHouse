<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('customer.elements.contact.index');
    }
}
