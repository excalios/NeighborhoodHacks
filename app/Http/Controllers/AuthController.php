<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthSignupRequest;
use App\Http\Requests\AuthSigninRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function signup(AuthSignupRequest $request)
    {
        $credentials = $request->all();
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            $credentials['password'] = Hash::make($credentials['password']);
            $user = User::create($credentials);

            $request->session()->regenerate($user);

            return redirect()->intended('dashboard');
        }
        // TODO
        return back()->withErrors('Email is already used');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function signin(AuthSigninRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate($credentials);

            return redirect()->intended('dashboard');
        }

        return back()->withErrors('Credentials Error');
    }
}
