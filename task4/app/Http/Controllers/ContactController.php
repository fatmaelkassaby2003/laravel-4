<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class ContactController extends Controller
{
    //
    public function index(){
        return view('front.contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'content' => 'required|string|max:255',
        ]);
        
        $data=$request->all();
        //dd($request->all());
        $message = new Message();
        //dd($message);
        $message->name=$data['name'];
        $message->email=$data['email'];
        $message->phone=$data['phone'];
        $message->content=$data['content'];
        $message->save();
        return back()->with('success','Message sent successfully' );
        //dd($message);
    }
}
