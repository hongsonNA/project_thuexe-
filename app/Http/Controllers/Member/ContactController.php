<?php

namespace App\Http\Controllers\Member;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index()
    {

        return view('admin.contact.contact_list');
    }

    public function AllDatatable()
    {
        return Datatables::of(Contact::query())->make(true);
    }

    public function store(ContactRequest $request)
    {
        $contacts = new Contact();
        $contacts->fill($request->all());
        $contacts->save();

        return redirect()->route('contact', compact('contacts'));
    }
}
