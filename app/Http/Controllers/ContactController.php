<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all()[0];
        return view('contact', ['contact' => $contacts]);
    }

  
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {
        $contact = Contact::findOrFail($request->id);
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->youtube = $request->youtube;
        $contact->instagram = $request->instagram;
        $contact->linkedin = $request->linkedin;
        $contact->save();
        return back()->with('success', 'Contacts has been updated successfully');
    }

    
    public function destroy($id)
    {
        //
    }
}
