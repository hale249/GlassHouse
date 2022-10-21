<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartUpdateRequest;
use App\Models\Cart;
use App\Models\CartDetail;
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
        $cart = Cart::query()->findOrFail($id);
        $cartDetails= CartDetail::query()->with([
            'color',
            'product',
            'accessory',
            'glassType',
            'aluminums'
        ])->where('cart_id', $id)->get();

        return view('admin.elements.cart.show', compact('cart', 'cartDetails'));
    }

    public function update(CartUpdateRequest $request, $id)
    {
        $data = $request->only(['status']);
        $cart = Cart::query()->findOrFail($id);

        if (empty($cart)) {
            $cart->update($data);
        }

        return redirect()->back();
    }
}
