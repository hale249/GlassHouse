<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('customer.elements.product.index');
    }

    public function show()
    {
        return view('customer.elements.product.show');
    }
}