<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // agar session tidak bisa digunakan lagi
        $request->session()->invalidate();

        // membuat token baru agar tidak bisa di hack
        $request->session()->regenerateToken();

        // memindahkan user ke halaman logout->keluar
        return redirect('/')->with('logoutSuccess', 'Anda berhasil logout, terimakasih!!');
    }
}
