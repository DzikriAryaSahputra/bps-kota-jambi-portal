<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (session()->has('admin_id')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if (! $admin || ! Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['username' => 'Username atau password salah.'])->withInput();
        }

        session(['admin_id' => $admin->id, 'admin_username' => $admin->username]);

        return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, ' . $admin->username . '!');
    }

    public function logout(Request $request): RedirectResponse
    {
        session()->flush();

        return redirect()->route('admin.login')->with('success', 'Anda telah berhasil logout.');
    }
}
