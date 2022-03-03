<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) return redirect()->route('dashboard');

        return view('authentication.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = env('APP_NAME').$data['password'];

        if (Auth::attempt(array_merge($data))) {
            $request->session()->regenerate();

            return redirect()->intended('');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
