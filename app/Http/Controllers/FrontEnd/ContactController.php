<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request) {
        $contact = Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return redirect()->back()->with('successMessage',"Thanks for your conection $request->name");
    }
}
