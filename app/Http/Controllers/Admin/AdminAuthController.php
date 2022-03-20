<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-admin', ['only' => 'logout']);
    }

    public function login()
    {
        if (!adminUser())
            return view('admin.login');

        return view('admin.dashboard');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (adminAuth()->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            Session::flash('success', 'Login successful!!');

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Credential mismatch');
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        adminAuth()->logout();

        Session::flash('success', 'Logout successfully');

        return redirect(route('admin'));
    }

}
