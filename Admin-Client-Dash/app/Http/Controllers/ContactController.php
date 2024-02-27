<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form data (e.g., send email, save to database, etc.)
        // For now, let's just return a success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }
}
