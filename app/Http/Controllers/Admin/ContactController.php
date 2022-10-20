<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $contacts = Contact::query();
        if (!empty($data['name'])) {
            $contacts = $contacts->where('name', 'like', '%' . $data['name'] . '%');
        }

        $userId = !empty($data['user_id']) ? $data['user_id'] : null;
        if (!empty($userId)) {
            $contacts = $contacts->where('user_id', $userId);
        }

        $contacts = $contacts->orderBy('created_at', 'desc')
            ->paginate(Constant::DEFAULT_PER_PAGE);

        return view('admin.elements.contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::query()->findOrFail($id);

        return view('admin.elements.contact.show', compact('contact'));
    }
}
