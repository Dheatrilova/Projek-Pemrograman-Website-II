<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin() { return view('admin.login'); }

public function login(Request $request)
{
    // Username & Password statis untuk presentasi besok
    if ($request->username === 'admin' && $request->password === 'admin123') {
        session(['admin_login' => true]);
        return redirect('/admin/dashboard');
    }
    return back()->withErrors(['msg' => 'Login Gagal!']);
}

public function logout() { session()->forget('admin_login'); return redirect('/admin/login'); }
}
