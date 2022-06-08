<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $model;

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    public function getMyContacts()
    {
        $phone = auth()->user()->phone;

        $contacts = $this->model->where('phone_id', $phone->id)->get();

        return view('addContact', [
        'contacts' => $contacts ?? null
        ]);

    }

    public function addContact(Request $request)
    {
        $contact = $this->model->create([
            'phone_id' => auth()->user()->phone->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return to_route('contacts.show');
    }
}
