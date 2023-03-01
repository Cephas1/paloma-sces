<?php

namespace App\Http\Controllers;

use App\Mail\ContactMarkdown;
use App\Mail\TestMail;
use Illuminate\Http\Request;
//use app\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:2',
            'body' => 'required|min:5'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        //Mail::to("receivermail@gmail.com")->send(new TestMail($details));
        Mail::to("contact@paloma-sces.com")->send(new ContactMarkdown($data));
        //dd("Mail sent");
        //echo"MAIL SENT SUCCESSFULLY";

        return "Email sent";
    }
}
