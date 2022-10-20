<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('customer.elements.payment.index');
    }

    public function success(Request $request)
    {
        return view('customer.elements.payment.success');
    }
}
