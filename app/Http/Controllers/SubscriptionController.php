<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
        ]);

        if ($request->has('consultantNewsletters')) {
            // Send Confirmation Email
            Mail::to($request->email)->send(new SubscriptionMail($request->all()));

            return back()->with('success', 'Thank you for subscribing! A confirmation email has been sent.');
        }

        return back()->with('info', 'You have not opted in for newsletters.');
    }
}
