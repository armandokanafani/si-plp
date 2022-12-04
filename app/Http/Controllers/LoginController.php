<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        if (Auth::user()) {
            // if ($user->level == '1') {
            //     return redirect()->intended('admin');
            // } elseif ($user->level == '2') {
            //     return redirect()->intended('kaprodi');
            // } elseif ($user->level == '3') {
            //     return redirect()->intended('kepsek');
            // } elseif ($user->level == '4') {
            //     return redirect()->intended('dospem');
            // } elseif ($user->level == '5') {
            //     return redirect()->intended('pamong');
            // } elseif ($user->level == '6') {
            //     return redirect()->intended('mahasiswa');
            // }

            return redirect()->intended('home');
        }

        return view('auth.login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // if ($user->level == '1') {
            //     return redirect()->intended('admin');
            // } elseif ($user->level == '2') {
            //     return redirect()->intended('kaprodi');
            // } elseif ($user->level == '3') {
            //     return redirect()->intended('kepsek');
            // } elseif ($user->level == '4') {
            //     return redirect()->intended('dospem');
            // } elseif ($user->level == '5') {
            //     return redirect()->intended('pamong');
            // } elseif ($user->level == '6') {
            //     return redirect()->intended('mahasiswa');
            // }
            if ($user) {
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username atau password salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
