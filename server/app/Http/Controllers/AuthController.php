<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'string', 'min:8'],
            ]
        );

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            return redirect('/pages');
        } else {
            // Pesan error generik
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['login' => 'Email atau password salah.']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
