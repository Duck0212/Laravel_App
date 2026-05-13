<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'phone' => 'nullable|string|max:20',
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'name.required' => 'Vui lòng nhập họ tên',
                'name.max' => 'Họ tên không được vượt quá 255 ký tự',

                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email này đã được đăng ký',

                'phone.max' => 'Số điện thoại không hợp lệ',

                'password.required' => 'Vui lòng nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            ]
        );

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'password' => bcrypt($data['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('home')->with('success', 'Đăng ký thành công. Chào mừng bạn đến FreshHarvest!');
    }
}
