<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\Details;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('books.login');
    }

   public function login(Request $request){
    $email = $request->email;
    $password = $request->password;
    $xo = [
        'email' => $email ,
        'password' => $password,
    ];
    if(Auth::attempt($xo)){
        $request->session()->regenerate();
        return redirect()->route('index')->with('yes', "");
    }
    else{
        return back()->withErrors([
            'email' =>"email incorrect please try again",
            'password' =>"Password Incorrect Please Try Again"
        ]);
    }
   }
   public function logout(){
    Session::flush();
    Auth::logout();
    return redirect()->route('show')->with('no','You are logged out!');
   }

   public function signup(){
    return  view("books.sig");
   }
   public function register(Request $request){
    $val = $request->validate([
        'name' => 'required',
        'email' =>'required|unique:clients',
        'password' =>'required|confirmed',
        'image'=>'required|image'

    ]);
    $val['image']=$request->file('image')->store('clients','public');
    $val['password'] = Hash::make($request->password);
    clients::create($val);
    return redirect()->route('show')->with('sign','User created successfully! Please Login to continue');
}

}
 