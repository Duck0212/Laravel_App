@extends('layouts.master')

@section('title', 'Login')

@section('content')
<main class="flex-grow flex items-center justify-center py-xl px-margin-mobile md:px-margin-desktop relative overflow-hidden">
    <!-- Decorative Background Element -->
    <div class="absolute top-0 right-0 -z-10 opacity-10">
        <img alt="Organic Greens Background" class="w-[600px] h-[600px] object-cover rounded-full blur-3xl" data-alt="A vibrant, soft-focus close-up of fresh organic kale leaves with dew drops, showcasing rich textures and various shades of deep forest green and primary green. The lighting is soft and natural, emphasizing the organic vitality and pure quality of the produce. This background element uses a minimalist high-key aesthetic to complement the clean UI design and light-mode layout." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWRWXQ9HXymxtPi31ywSQlIz8fUF_2oic8nW_e1sIyMSEfAPOpJfcrg9VDBPvHiVWd51M3fYxfjN0qXofdT2cgLhq2N5ttyVjpuuy-p4__MYRt5lwp-vX6atzXFQvycfJ-xn-IeiKn0nehyg2FIoc1cZDmmZEKBjjYSNQrJXCSbQn-zZvbDf0qhaxFUwagJGmM1RuP8_VTfVQfN52_es_aINimRpDtFqVhIBSynP7K2dAqulZubXoom0gCP1oyhGEwiTcONIjc8lk" />
    </div>
    <!-- Login Card -->
    <div class="w-full max-w-[480px] bg-surface-container-lowest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] p-md md:p-lg border border-outline-variant/30 mt-20">
        <!-- Brand Logo / Header -->
        <div class="text-center mb-lg">
            <h1 class="font-display-lg text-headline-md text-primary tracking-tight mb-xs">FreshHarvest</h1>
            <p class="font-body-md text-on-surface-variant">Chào mừng bạn trở lại với thiên nhiên</p>
        </div>
        <!-- Login Form -->
        <form action="{{ route('login.authenticate') }}" method="POST" class="space-y-md">
            @csrf
            @if(session('info'))
            <div class="rounded-lg border border-blue-200 bg-blue-50 p-3 text-blue-900">
                {{ session('info') }}
            </div>
            @endif
            @if($errors->any())
            <div class="rounded-lg border border-rose-200 bg-rose-50 p-3 text-rose-900">
                <ul class="list-disc pl-5 space-y-1 text-sm">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(request('redirect'))
            <input type="hidden" name="redirect" value="{{ request('redirect') }}" />
            @endif
            <!-- Username/Email Field -->
            <div class="space-y-xs">
                <label class="font-label-md text-on-surface-variant block" for="login-identity">Email hoặc Tên đăng nhập</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">person</span>
                    <input class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md placeholder:text-outline-variant" id="login-identity" name="identity" placeholder="example@freshharvest.com" value="{{ old('identity') }}" required="" type="text" />
                </div>
            </div>
            <!-- Password Field -->
            <div class="space-y-xs">
                <div class="flex justify-between items-center">
                    <label class="font-label-md text-on-surface-variant block" for="login-password">Mật khẩu</label>
                    <a class="font-label-sm text-primary hover:underline underline-offset-4" href="{{ route('password.request') }}">Quên mật khẩu?</a>
                </div>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock</span>
                    <input class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md placeholder:text-outline-variant" id="login-password" name="password" placeholder="••••••••" required="" type="password" />
                </div>
            </div>
            <!-- Remember Me -->
            <div class="flex items-center space-x-2">
                <input class="w-4 h-4 text-primary border-outline-variant rounded focus:ring-primary" id="remember-me" type="checkbox" />
                <label class="font-label-md text-on-surface-variant select-none" for="remember-me">Duy trì đăng nhập</label>
            </div>
            <!-- Login Button -->
            <button class="w-full bg-primary text-on-primary py-4 rounded-lg font-headline-sm hover:bg-primary-container transition-all shadow-sm active:scale-[0.98] mt-base cursor-pointer hover:cursor-pointer" type="submit">
                Đăng nhập
            </button>
        </form>
        <!-- Divider -->
        <div class="relative my-lg">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-outline-variant"></div>
            </div>
            <div class="relative flex justify-center text-label-sm">
                <span class="bg-surface-container-lowest px-4 text-outline font-label-md">Hoặc tiếp tục với</span>
            </div>
        </div>
        <!-- Social Logins -->
        <div class="grid grid-cols-2 gap-gutter">
            <button class="flex items-center justify-center space-x-2 py-3 px-4 border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all font-label-md text-on-surface cursor-pointer hover:cursor-pointer">
                <img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ1fh-2zPqwQgH9-UqXJvcUP361b45AgF2ZZMSJrzn3sHKrVXkq1iTMOolMwx_O4VUVr4hTGY5UT6F3fujT25TjpmcHGjNTPklAQlv0Xmhl9QhnCt1Fi3sWa43Pyf9PXUp26zIeTu7ShySccA4hNWU7pTHUBqZype3EW_s6LsivLo4Sp8Lv1ZKzvtF15TxjYAQKsj0MiqBTY8sZ-Xw5M_FF1vn_MrimVB0tIV2e4Ti25jfwXEgMFVAChWDxfRV8vBLZVjsS96YUm4" />
                <span>Google</span>
            </button>
            <button class="flex items-center justify-center space-x-2 py-3 px-4 border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all font-label-md text-on-surface cursor-pointer hover:cursor-pointer">
                <img alt="Facebook" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbCXH1nAN3U5dAYKuWErzoSI1K5X_O0JnCOZE5F8gWbl0Yhv05MYY7WiGKveASiiYI03IspXQqTUMzLmxESg5Q6X50X2x5ipiJtdCjiaMsZwDHFr4H7CrqMLeqJRp6vC3Olw_6KGWRBWTtpfA-2bEAjMnjIyMYL53M4NfeNrEPRxAOmMispQM0p8-4TueU5WQSh1qreR97t_MIn81uSIlBDMZqsk0S-NXxYZoh8KSREUu1Q_iQmM2yKv4dGeffBJEUi5vpQW5cKLQ" />
                <span>Facebook</span>
            </button>
        </div>
        <!-- Sign Up Link -->
        <div class="mt-lg text-center">
            <p class="font-body-md text-on-surface-variant">
                Chưa có tài khoản?
                <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="{{ route('register') }}">Đăng ký ngay</a>
            </p>
        </div>
    </div>
</main>