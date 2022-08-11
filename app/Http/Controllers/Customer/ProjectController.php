<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('customer.elements.project.index');
    }

    public function show()
    {
        return view('customer.elements.project.show');
    }
}
