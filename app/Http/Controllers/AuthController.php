<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function index(){
    return view('login.index',[
        'title' => 'login'
    ]);
}

  public function register(){
        return view('register.index',[
            'title' => 'register'
        ]);
    }

public function login(Request $request){

    $data =$request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);


     if (Auth::attempt($data)) {
        return redirect('/categories')->with('success', 'Success, Please Login');
    }

    return back()->with('loginError', 'Password atau Username Salah');
}

public function store(Request $request){
         $data =$request->validate([
            'username' => ['required', 'unique:users'],
            'password' => ['required'],
         ]);

         User::create($data);
         return redirect('/')->with('success', 'Success, Please Login');
    }


}