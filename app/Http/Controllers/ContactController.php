<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function contactStore(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|max:1000'
        ]);
        Contact::create($validated);
        return redirect()->route('contact')->with('message', 'Successfully Send a message');
    }

    public function show($id) {
        dd($id);
    }
}
