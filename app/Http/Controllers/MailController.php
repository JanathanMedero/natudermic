<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {

        $details = [
            'name' => $request->name,
            'phone' => $request->phone
        ];

        Mail::to($request->email)->send(new SendMail($details));

        return back()->with('success', 'Todo listo, nos pondremos en contacto contigo muy pronto.');

    }
}
