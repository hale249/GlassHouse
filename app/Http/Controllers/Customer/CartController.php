<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        return view('customer.elements.cart.index');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::query()->find($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] =  $cart[$id]['quantity'] + ($request->quantity ?? 1);
            $cart[$id]['image'] =  $product->image ?? '';
            $cart[$id]['name'] =  $product->name ?? '';
            $cart[$id]['description_short'] = $product->description_short ?? '';
        } else {
            $cart[$id] = [
                "name" => $request->name,
                "quantity" => $request->quantity ?? 1,
                'price' => $product->price ?? 0,
                "total" => ($product->price ?? 0) * ($request->quantity ?? 1),
                "image" => $product->image ?? '',
                "product_color_id" => $request->product_color_id,
                "product_glass_id" => $request->product_glass_id,
                "product_aluminum_id" => $request->product_aluminum_id,
                "product_accessory_id" => $request->product_accessory_id,
                "product_longs" => $request->product_longs,
                "product_width" => $request->product_width,
                'color_name' => $request->color_name,
                'glass_type' => $request->glass_type,
                'accessory' => $request->accessory,
                'aluminum' => $request->aluminum,
                'description_short' => $product->description_short ?? '',
                'product_id' => $id
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        if($id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        return response()->json([
            'success' => 200
        ]);
    }

    public function remove($id)
    {
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }

        return response()->json([
            'success' => 200
        ]);
    }
}
