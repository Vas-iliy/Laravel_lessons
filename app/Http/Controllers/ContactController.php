<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {
        Mail::to('phptruthcoder@yandex.ru')->send(new TestMail());
        return view('send');
    }
}
