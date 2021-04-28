<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function showLogin()
    {
        return view('auth.sign-in');
    }
    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'roles' => [0, 1],
        ];
        if (!Auth::attempt($user)) {
            return redirect()->route('login')->with('login-error', 'Tài khoản hoặc mật khẩu không đúng!');
        } else {
            return view('dashboard.list');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
