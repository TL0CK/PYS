<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MessagesController extends Controller
{
    public function getName(Request $request){
        return $request->input('name');
    }

    public function getEmail(Request $request){
        return $request->input('email');
    }

    public function getMessage(Request $request){
        return $request->input('message');
    }

    public function submit(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        return 'SUCCESS';
        //Mail::to('lecouplesoyeux@gmail.com')
        //->send('test');

        //return $this->getName($request) . ' ' . $this->getEmail($request) . ' ' . $this->getMessage($request);
    }
}
