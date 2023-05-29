<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send the email
        $emailTo = 'your-email@example.com'; // Replace with your email address
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];

        Mail::to($emailTo)->send(new \App\Mail\ContactFormSubmitted($data));

        // Redirect back with a success message
        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
