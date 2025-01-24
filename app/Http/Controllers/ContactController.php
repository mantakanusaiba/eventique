<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Mail;
use App\Models\Contact; // Assuming you have a Contact model

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a Contact record in the database
        $contact = Contact::create($request->all());

        // Send email notification (optional)
        // Mail::to('eventique@gmail.com')->send(new ContactUsMail($request->all()));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}