<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactFormRequest $request)
    {
        // send email
        Mail::to('funny@happinessfactors.com')
            ->send(new ContactMail($request->validated()));

        return back()->with('status', 'Thank you! Your message has been sent.');
    }
}
