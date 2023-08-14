<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\MailContact;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function contact(ContactModel $contact, MailRequest $request)
    {
        Mail::send(new MailContact($contact, $request->validated()));
        return back()->with("success", "Votre Mail à été envoyez avec succes");
    }
}
