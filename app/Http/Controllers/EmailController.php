<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

// Model
use App\Email;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $emails = Email::all();
        foreach ($emails as $key => $value) {
            Mail::to($value)->queue(new SendEmail());
        }
        return response('Email queued!');
    }
}
