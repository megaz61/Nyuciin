<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.daftar');
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'email' => ['required','email','max:255','unique:users'],
            'nama' => ['required','min:3','max:255'],
            'username' => ['required','min:3','max:255','unique:users'],
            'telpon' => ['nullable','regex:/^08[0-9]{8,}$/'],
            'password' => ['required','min:6','max:255'],
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        $request->session()->flash('success', "{$validateData['nama']} Berhasil mendaftar");
        return redirect('/login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login Failed');

    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
