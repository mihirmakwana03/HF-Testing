<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoRequestController extends Controller
{
    public function requestDemo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'work_email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_size' => 'required|string|max:50',
            'country' => 'required|string|max:100',
            'message' => 'required|string|max:1000',
        ]);

        // Here you would typically:
        // 1. Store the request in the database
        // 2. Send notification emails
        // 3. Integrate with your CRM

        // For now, we'll just return a success message
        return redirect()->back()->with('success', 'Thank you for your interest! We will contact you shortly to schedule your demo.');
    }
} 