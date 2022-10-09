<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $carts = Cart::query();
        if (!empty($data['name'])) {
            $carts = $carts->where('name', 'like', '%' . $data['name'] . '%');
        }

        $carts = $carts->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.cart.index', compact('carts'));
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
