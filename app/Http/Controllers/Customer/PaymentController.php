<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function index()
    {
        return view('customer.elements.payment.index');
    }

    public function success(Request $request)
    {
        $cart = session()->get('cart');
        if (empty($cart)) {
            return view('customer.elements.payment.index');
        }

        $customer = [
            'name' => 'Glasshouse',
            'phone_number' => '(+84) 912345678',
            'email' => 'glasshouse@gmail.com',
            'address' => 'Số 242 Cổ Bi, Gia Lâm, Hà Nội.',
            'password' => Hash::make('password'),
        ];

        $client = Customer::query()->updateOrCreate([
            'phone_number' => '(+84) 912345678',
            'email' => 'glasshouse@gmail.com',
        ], $customer);
        if (empty($client)) {
            return view('customer.elements.payment.index');
        }

        $total = 0;
        foreach ($cart as $detail) {
            $total += ($detail['price'] ?? 0) * ($detail['quantity'] ?? 1);
        }

        $cartData = [
            'client_id' => $client->id,
            'sub_total' => $total,
            'ship_price' => 100000,
            'vat' => $total / 10,
            'total' => $total + 100000 + ($total / 10),
        ];

        $insertData = DB::transaction(function () use ($cart, $cartData, $client) {
            $cartInsert = Cart::query()->create($cartData);
            foreach ($cart as $detail) {
                CartDetail::query()->create([
                    'cart_id' => $cartInsert->id,
                    'product_id' => $detail['product_id'] ?? 0,
                    'product_image_id' => null,
                    'quantity' => $detail['quantity'] ?? 1,
                    'product_color_id' => $detail['product_color_id'] ?? 0,
                    'product_glass_id' => $detail['product_glass_id'] ?? 0,
                    'product_aluminum_id' => $detail['product_aluminum_id'] ?? 0,
                    'product_accessory_id' => $detail['product_accessory_id'] ?? 0,
                    'product_longs' => $detail['product_longs'] ?? 0,
                    'product_width' => $detail['product_width'] ?? 0,
                    'price' => $detail['price'] ?? 0,
                ]);
            }

            return $cartInsert;
        });

        if (empty($insertData)) {
            return view('customer.elements.payment.index');
        }

        return view('customer.elements.payment.success');
    }
}
