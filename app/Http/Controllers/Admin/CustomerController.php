<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Show list users
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $data = $request->all();
        $customers = Customer::query();
        if (!empty($data['name'])) {
            $customers = $customers->where('name','like', '%' . $data['name'] . '%');
        }

        if (!empty($data['email'])) {
            $customers = $customers->where('email','like', '%' . $data['email'] . '%');
        }
        $customers = $customers->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.customer.index', compact('customers'));
    }

}
