<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\ContactSoreRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('customer.elements.contact.index');
    }

    public function store(ContactSoreRequest $request)
    {
        $data = $request->only([
            'email',
            'phone_number',
            'name',
            'address',
            'content',
        ]);

        Contact::query()->create($data);

        return redirect()->back();
    }
}
