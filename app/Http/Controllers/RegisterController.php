<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    function makeRegisterForm(){
        return view('justdu-it.register');
    }


    function validator(Request $request){
        return $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3',
            'confirm' => 'required|same:password'
        ]);
    }


    function register(Request $request){
        $this->validator($request);

        $user = new User();
        $user['username'] = $request['username'];
        $user['email'] = $request['email'];
        $user['password'] = Hash::make($request['password']);
        $user['role'] = 'member';
        $user->save();

        return redirect('login');
    }

   


}
