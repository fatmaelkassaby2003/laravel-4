<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Auth\Events\Registered;
use App\Models\User;
use App\Mail\SendVerificationCode;
use Auth;
use Mail;
class AuthController extends Controller
{
       public function register()
    {
        return view('front.auth.register');
    }

    public function storeUser(Request $request)
    {
      $data =  $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
       $data['password'] = bcrypt($data['password']);
       $user = User::create($data);
       $user->code=505050;
       Mail::to("hamada@gmail.com")->send(new SendVerificationCode($user));
      // event(new Registered($user));
        Auth::login($user);
        return redirect()->route('home');

    }

    public function login(Request $request)
    {
        return view('front.auth.login');
    }

    public function loginUser(Request $request)
    {
        $data= $request->validate
        ([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($data)) 
        {
            return redirect()->route('home');
        }
        else
        {
            return back()->with('error','Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
