<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class ProductRotoController extends Controller
{
    public function cuaNhomRoto()
    {
        return view('customer.elements.product-roto.cua-nhom-roto');
    }

    public function phuKienRoto()
    {
        return view('customer.elements.product-roto.phu-kien-roto');
    }
}
