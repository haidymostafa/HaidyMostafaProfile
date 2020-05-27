<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;

class MessagesController extends Controller
{
    
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message'=>'required',
        ]);
        $message= new Messages();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return Redirect::back();

    }


    public function update(Request $request, Message $message)
    {
        $data=$this->validate($request,[
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
            'message'=>'required',
        ]);
        $message->name=$request->name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return Redirect::back();   
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return Redirect::back();  
    }
    
}