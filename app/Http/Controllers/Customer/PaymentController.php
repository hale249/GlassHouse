<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        return view('customer.elements.payment.index');
    }

    public function success()
    {
        return view('customer.elements.payment.success');
    }
}
