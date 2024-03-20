<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    // Memproses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user', $user);

            return redirect()->intended('/');
        } else {
            // Jika autentikasi gagal, redirect kembali ke halaman login dengan pesan kesalahan
            return redirect()->route('login')->with('error', 'Email atau kata sandi salah');
        }
    }
}
