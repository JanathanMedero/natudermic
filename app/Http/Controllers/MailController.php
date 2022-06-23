<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'name'      => $request->name,
            'email'     => $request->email,
            'affair'    => $request->affair,
            'message'   => $request->message
        ];

        Mail::to($request->email)->send(new SendMail($details));

        Mail::to('soporte@natudermic.mx')->send(new AdminMail($details));

        return back()->with('success', 'Todo listo, nos pondremos en contacto contigo muy pronto.');

    }
}
