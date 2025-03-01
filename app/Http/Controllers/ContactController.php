<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

      
        Contact::create($request->only('name', 'email', 'subject', 'message'));

        
        Mail::send(new ContactUsMail($request->all()));

       
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}

