<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    function makeLoginForm(){
        if(Auth::check()){
            return redirect('home');
        } else {
            return view('justdu-it.login');
        }
        
    }

    function validator(Request $request){
        return $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    }

    function login(Request $request){
        $this->validator($request);
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials, false)){
            if ($request->input(['remember']) === 'on'){
                Cookie::queue('email',$request->input(['email']),120);
                Cookie::queue('email',$request->input(['password']),120);    
            }
            return redirect('home');
        } else {
            return redirect('login');
        }    
        
    }

    function logout(){
        Auth::logout();
        return redirect('home');
    }
}
