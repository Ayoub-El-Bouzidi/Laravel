<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        //validation des formulair
        $request->validat([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|message|max:255'
        ]);
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('emails.contact',$data,function($message){
           $message->to('bozidia048@gmail.com','Dar Ayoub')
           ->subject('huhuh'); 
        });
        back()->with('succes','bravo');
}
}