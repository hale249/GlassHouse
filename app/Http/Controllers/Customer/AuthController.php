<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthLoginRequest;
use \App\Http\Requests\Customer\AuthRegisterRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('customer.elements.login');
    }

    public function login(AuthLoginRequest $request)
    {
        $credentials = $request->only([
            'email',
            'password'
        ]);
        $remember = $request->input('remember_me');
        if (Auth::guard('customers')->attempt($credentials, $remember)) {
            return redirect()->route('customer.home.index')->with('flash_success', 'Thành công');
        }

        return redirect()->back()->withErrors(['Thất bại']);
    }

    public function register(AuthRegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        dd(2);
        dd(2);
        $data = $request->only([
            'email',
            'name',
            'password',
            'phone_number',
            'address'
        ]);
        $data['password'] = Hash::make($data['password']);

        $customer = Customer::query()->create($data);
        dd($customer);

        return redirect()->route('customer.home.index')->with('flash_success', 'Thành công');
    }
}
