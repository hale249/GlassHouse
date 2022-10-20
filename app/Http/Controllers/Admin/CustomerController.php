<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserChangePasswordRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    /**
     * Show form edit user
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $customer = Customer::query()->findOrFail($id);

        return view('admin.elements.customer.edit', compact('customer'));
    }

    public function update(Request $request, int $id)
    {
        $data = $request->only([
            'name',
            'email',
            'phone_number',
            'address'
        ]);

        $customer = Customer::query()->findOrFail($id);
        $customer->update($data);

        return redirect()->back()->with('flash_success', 'Cập nhật khách hàng thành công');
    }


    public function showFormChangePassword(int $id): View
    {
        $customer = Customer::query()->findOrFail($id);

        return view('admin.elements.customer.change_password', compact('customer'));
    }

    public function changePassword(UserChangePasswordRequest $request, int $id)
    {
        $password = $request->input('password');
        $customer = Customer::query()->findOrFail($id);
        $password = Hash::make($password);
        $customer->update(['password' => $password]);

        return redirect()->back()->with('flash_success', 'Cập nhật mật khẩu thành công');
    }
}
