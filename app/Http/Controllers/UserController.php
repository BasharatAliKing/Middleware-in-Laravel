<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function loginMatch(Request $req){
        $cred=$req->validate([
           'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($cred)){
            return redirect()->route('dashboard');
        }

    }
    public function register(){
        return view('register');
    }
    public function registersubmit(Request $req){
        $cred=$req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);
        $user=User::create($cred);
        if($user){
            return redirect()->route('login');
        }
    }
    public function dashboard(){
            return view('dashboard');
    }
    public function admin(){
        return view('admin');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
