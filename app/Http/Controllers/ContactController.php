<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front.pages.contact');
    }

    public function datastore(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message,
        ];
        Contact::create($data);
        Alert::success('success', 'Thank You for contact Us');
        return redirect()->back();
    }

    public function show()
    {
        $data = Contact::get();

        return view('back.dashboard.admin.pages.allcontact', ['share' => $data]);
    }
}
