<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'name' => 'required|min:5|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ]);
            $body = "<p><b>Name:</b> {$request->input('name')}</p>";
            $body .= "<p><b>Email:</b> {$request->input('email')}</p>";
            $body .= "<p><b>Message:</b><br>".nl2br($request->input('text'))."</p>";
            Mail::to('phptruthcoder@rambler.ru')->send(new TestMail($body));
            $request->session()->flash('success', 'Yes!');
            return redirect()->route('send');
        }

        return view('send');
    }
}
