<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SessionsController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }
    public function create()
    {
        return view('Admin.session.login-session');
    }   
    public function store()
{
    $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($attributes)) {
        session()->regenerate();
        return redirect()->route('Admin.dashboard')->with(['success' => 'You are logged in.']);
    } else {
        return back()->withErrors(['email' => 'Email or password invalid.']);
    }
}

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login')->with(['success' => 'You\'ve been logged out.']);
    }
}
