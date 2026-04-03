<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthorizationController extends Controller
{
    public function index()
    {
        return view('LogIn');
    }

    public function show(Request $request)
    {
        if(Auth::attempt($request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]))&&User::where('email', request('email'))->exists()){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function create()
    {
        return view('SignUp');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'email', 'unique:Users,email'],
            'password' => ['required', Password::default()],
        ]);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        Auth::login($user);
        return redirect('/');
    }

    public function update()
    {
        Auth::logout();
        return redirect('/')->with(['user' => null]);
    }
}