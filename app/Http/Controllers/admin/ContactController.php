<?php

namespace App\Http\Controllers\admin;

use App\ContactsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function saveContactsMail(Request $request){
        $dataContactsMail = $request->all();
        ContactsMail::Create([
            'name' => $dataContactsMail['name'],
            'email' => $dataContactsMail['email'],
            'tel' => $dataContactsMail['tel'],
            'message' => $dataContactsMail['message'],
        ]);
        $this->mail($dataContactsMail);
        return back();
    }

    public function mail($data){
        Mail::send('emails.welcome', compact('data'), function ($message) use ($data){
            $message->from('test@i.ua');
            $message->to($data['email']);
            $message->subject('Hello');
        });
    }
}
