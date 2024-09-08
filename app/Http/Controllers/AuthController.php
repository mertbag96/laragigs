<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Apply the 'guest' middleware to all methods except 'logout'.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function signin(): View
    {
        return view('auth.login');

    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('index')->with('message', 'You successfully signed in!');
        }

        return back()->withErrors(['credentials' => 'These credentials do not match our records!'])->withInput($request->only('email'));;
    }

    public function signup(): View
    {
        return view('auth.register');
        
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect()->route('index')->with('message', 'Welcome to LaraGigs!');
    }

    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index')->with('message','You successfully signed out!');
    }
}
