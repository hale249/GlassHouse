<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class HiringController extends Controller
{
    public function index()
    {
        return view('customer.elements.hiring.index');
    }
}
