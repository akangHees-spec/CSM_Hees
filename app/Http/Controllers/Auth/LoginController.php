<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        return redirect()->route('login');
    }

    public function create()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|exists:users,email', 
            'password' => 'required|string|min:6'
        ], [
            'email.required'    => 'Email wajib diisi woi :)',
            'email.email'       => 'Format emailnya gak valid cik',
            'email.exists'      => 'Email tidak terdaftar',
            'password.required' => 'Password wajib diisi yah :)',
            'password.min'      => 'Password minimal 6 karakter',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'))
                ->with('success', 'Login berhasil, Selamat datang!'); 
        }

        return back()->withErrors([
            'email' => 'Email atau password salah wok',
        ])->withInput($request->except('password'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Anda telah logout');
    }
}