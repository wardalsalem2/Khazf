<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // لو بدك تخزن البيانات بقاعدة البيانات

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'email', 'subject', 'message'));
        return back()->with('success', 'Your message has been sent successfully!');
    }
}

