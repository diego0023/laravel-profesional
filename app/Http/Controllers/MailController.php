<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        return view('mail.index');
    }

    public function mailMe(){
        Mail::to('f47c80bcad7da0@sandbox.smtp.mailtrap.io')->send(new ExampleMail('diego'));
        return view('mail.send');
    }
}
