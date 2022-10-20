<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countCart = Cart::query()->count();
        $countSuccess = Cart::query()->where('status', 'complete')->count();
        $countProduct = Project::query()->count();
        $countProject = Project::query()->count();
        $countCustomer = Customer::query()->count();

        $static = [
            'count_cart' => $countCart,
            'count_complete' => $countSuccess,
            'count_product' => $countProduct,
            'count_project' => $countProject,
            'count_customer' => $countCustomer,
        ];
        return view('admin.elements.dashboard.index', compact('static'));
    }
}
