<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
    return view('login.loginAdmin',[
        'title' => 'login'
    ]);
}

 public function register(){
        return view('register.registerAdmin',[
            'title' => 'register'
        ]);
    }
    public function store(Request $request){
        // dd($request);
    // Hash the password before storing it
    $request['password'] = Hash::make($request['password']);
    Admin::create($request);
    return redirect('/loginAdmin')->with('success', 'Success, Please Login');
}
}
