<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    public function index()
    {
        return view('customer.elements.introduce.index');
    }
}
