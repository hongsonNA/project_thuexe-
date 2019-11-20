<?php

namespace App\Http\Controllers\Member;

use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.contact_list', compact('contacts'));
    }

    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts->fill($request->all());
        $contacts->save();
        return redirect()->route('contact', compact('contacts'));
    }
}
