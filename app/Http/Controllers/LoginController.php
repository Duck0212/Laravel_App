<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show(Request $request)
    {
        $redirect = $request->query('redirect');
        return view('login', ['redirect' => $redirect]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'identity' => 'required|string',
            'password' => 'required|string',
        ]);

        // Try to find user by email or name
        $user = User::where('email', $credentials['identity'])
            ->orWhere('name', $credentials['identity'])
            ->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            // Redirect to the return URL if provided, otherwise to home
            $redirect = $request->input('redirect', route('home'));
            return redirect($redirect)->with('success', 'Đăng nhập thành công!');
        }

        return back()->withErrors([
            'identity' => 'Tên đăng nhập hoặc mật khẩu không chính xác.',
        ])->onlyInput('identity');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'))->with('success', 'Đã đăng xuất thành công!');
    }
}
