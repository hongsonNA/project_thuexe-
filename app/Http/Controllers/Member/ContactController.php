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
        return Datatables::of(Contact::query())
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('contact_edit', $contact->id) . '" class="btn btn-link btn-info btn-just-icon edit">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                        </a>';
            })->rawColumns(['action'])
            ->make(true);
    }

    public function store(ContactRequest $request)
    {
        $contacts = new Contact();
        $contacts->fill($request->all());
        $contacts->save();

        return redirect()->route('contact', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        if (empty($contact)) {
            return view('admin.contact.contact_list');
        }

        return view('admin.contact.edit_contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if (empty($contact)) {
            return view('admin.contact.contact_list');
        } else {
            $contact->status = $request->get('status');
            $mess_update = "";
            if ($contact->save()) {
                $mess_update = "Thay đổi trạng thái thành công";
            }
        }

//        return redirect()->route('category_list', compact('cate'));

        return redirect()->route('contact_list', compact('contact'))->with('mess_update', $mess_update);
    }

}
