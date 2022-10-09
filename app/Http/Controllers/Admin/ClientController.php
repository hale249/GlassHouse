<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
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
        $users = User::query();
        if (!empty($data['role'])) {
            $users = $users->role($data['role']);
        }

        if (!empty($data['name'])) {
            $users = $users->where('name','like', '%' . $data['name'] . '%');
        }

        if (!empty($data['email'])) {
            $users = $users->where('email','like', '%' . $data['email'] . '%');
        }
        $users = $users->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.user.index', compact('users'));
    }

}
