@extends('layouts.master')

@section('title', 'Quên mật khẩu')

@section('content')
<main class="flex-grow flex items-center justify-center py-xl px-margin-mobile md:px-margin-desktop relative overflow-hidden">
    <!-- Decorative Background Element -->
    <div class="absolute top-0 right-0 -z-10 opacity-10">
        <img alt="Organic Greens Background" class="w-[600px] h-[600px] object-cover rounded-full blur-3xl" data-alt="A vibrant, soft-focus close-up of fresh organic kale leaves with dew drops, showcasing rich textures and various shades of deep forest green and primary green. The lighting is soft and natural, emphasizing the organic vitality and pure quality of the produce. This background element uses a minimalist high-key aesthetic to complement the clean UI design and light-mode layout." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWRWXQ9HXymxtPi31ywSQlIz8fUF_2oic8nW_e1sIyMSEfAPOpJfcrg9VDBPvHiVWd51M3fYxfjN0qXofdT2cgLhq2N5ttyVjpuuy-p4__MYRt5lwp-vX6atzXFQvycfJ-xn-IeiKn0nehyg2FIoc1cZDmmZEKBjjYSNQrJXCSbQn-zZvbDf0qhaxFUwagJGmM1RuP8_VTfVQfN52_es_aINimRpDtFqVhIBSynP7K2dAqulZubXoom0gCP1oyhGEwiTcONIjc8lk" />
    </div>

    <!-- Forgot Password Card -->
    <div class="w-full max-w-[480px] bg-surface-container-lowest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] p-md md:p-lg border border-outline-variant/30">
        <!-- Header -->
        <div class="text-center mb-lg">
            <h1 class="font-display-lg text-headline-md text-primary tracking-tight mb-xs">Quên mật khẩu</h1>
            <p class="font-body-md text-on-surface-variant">Nhập email của bạn để nhận link đặt lại mật khẩu</p>
        </div>

        <!-- Status Message -->
        @if (session('info'))
        <div class="mb-lg rounded-xl border border-blue-200 bg-blue-50 p-4 text-blue-900">
            {{ session('info') }}
        </div>
        @endif
        @if (session('status'))
        <div class="mb-lg rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-900">
            {{ session('status') }}
        </div>
        @endif

        <!-- Forgot Password Form -->
        <form action="{{ route('password.email') }}" method="POST" class="space-y-md">
            @csrf

            <!-- Email Field -->
            <div class="space-y-xs">
                <label class="font-label-md text-on-surface-variant block" for="email">Email</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">mail</span>
                    <input class="w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all font-body-md placeholder:text-outline-variant @error('email') border-rose-300 @enderror" id="email" name="email" placeholder="example@freshharvest.com" value="{{ old('email') }}" required type="email" />
                </div>
                @error('email')
                <p class="text-rose-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button class="w-full bg-primary text-on-primary py-4 rounded-lg font-headline-sm hover:bg-primary-container transition-all shadow-sm active:scale-[0.98] mt-base cursor-pointer hover:cursor-pointer" type="submit">
                Gửi link đặt lại mật khẩu
            </button>
        </form>

        <!-- Back to Login Link -->
        <div class="mt-lg text-center">
            <p class="font-body-md text-on-surface-variant">
                Nhớ mật khẩu?
                <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="{{ route('login') }}">Đăng nhập</a>
            </p>
        </div>
    </div>
</main>
@endsection