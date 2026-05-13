@extends('layouts.master')

@section('title', 'Register')

@section('content')
<main class="register-container flex items-center justify-center py-lg px-margin-mobile">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-xl max-w-[1280px] w-full items-center mt-8">
        <!-- Left Side: Visual/Brand Messaging -->
        <div class="hidden lg:block lg:col-span-6 space-y-md">
            <div class="relative rounded-xl overflow-hidden aspect-[4/5] shadow-sm">
                <img class="absolute inset-0 w-full h-full object-cover opacity-60" data-alt="A premium close-up of vibrant, fresh organic fruits including ripe berries and tropical citrus arranged artistically on a white marble surface. The lighting is bright and natural, emphasizing the dewy texture and peak ripeness of the produce. The overall aesthetic is clean, minimalist, and high-end, reflecting a sense of health, purity, and organic vitality through a bright light-mode color palette."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzMpzk9kTUyi3a1N0wJiHzPB83CLBYQJKUXn-wp1rDqoRKbKhx5YxgdgMamdDGq5eqgMY6DllDSrkVrsNQOBKXor1sx9183m8FCT3hEv3mETDx_TKcuxMcxPl4NOMNY9Jf5vq7ygmTfXHWiE6PtoUUddXcuO05stUu2sMnjHHr_dHe0SvLjW9IOtO_4sLjCfeOKvXJq7Td6Hni6bAiMFYcUgkQC_agWH7PeHUAipWOLy--BjSreSvf2JXdabToQER57dnRESrnJF0" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-xl text-white">
                    <h2 class="font-display-lg text-white mb-sm">Gia nhập cộng đồng Sống Khỏe</h2>
                    <p class="font-body-lg text-white/90">Trải nghiệm những loại trái cây tươi ngon nhất từ nông trại hữu cơ đến tận cửa nhà bạn.</p>
                </div>
            </div>
            <div class="flex gap-md">
                <div class="flex -space-x-base">
                    <div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container">
                        <img class="w-full h-full rounded-full object-cover" data-alt="Profile portrait of a smiling user in a bright setting."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCQMfM7PU5hPItHWdr5Z2tklgZqkJU38iiHUjVWoD098ElHniZf0nGSp8YCZgn_j9aQZTAqnO2wvV_329YBrlRvvi3Ah6w9zKoIfN9gg2GYufY5F76TyO71rYxIFqm1Z_F4qJpzY3P8puGUb7muMQN9lcs0Xcjnhvx5EOKLz5EMsuWtVviGmrihoDpNltC6VmAndtwmiTbpIH5Mk6qaOzgSbhAWc_FFKhVv7x65toCjz_O2yssEE-ByYszhjCnBfzsET1TtuykNpI" />
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container">
                        <img class="w-full h-full rounded-full object-cover" data-alt="Profile portrait of a smiling user in a bright setting."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLJ2sHZYc0vPD16v3ntOEtckD38lmltcVWMDAsWuHlkZpHO6xWlcwdYhdt70N7kE6Q9nn5y6M7ex8dzu7fLDwXbcjnI3nos-hJfNel5Jbs1UW5-qNUil8OUiDzYe8sGdZ_0RVsJU45MvlFxK3RHFSUTb_1yjVAKSb3ActLQ_-QDOsVEm5XyRDZpzR-m2TPRgspFXUIxebW6cMUdDSP9a96tA3nvQrO8JvEtoq6YuAv5OdWYUK5FbVtIjG8s65mGqCmMNvehEP7naU" />
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container">
                        <img class="w-full h-full rounded-full object-cover" data-alt="Profile portrait of a smiling user in a bright setting."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoJQFYN1f8ldPyUFGwWQMREsZoEuKQuVyqH7Xm-zX48-c0bvrRMW7iaIAIifgUMwfviM74oJlnlFhCQZanJMjxvm_lgWKBKvULGVcCPPwS8AEiNJtz3b5o1m3pP8MHDrbO29wCkPBEl3JqWkiMpnO8aV-RTvIrqrrhm7gdlhip4VW-pjcQKmdihOS8Qy3dyei5JP9lE1kvdqNH9YW9mtx7ijHmyRyKxCTVI259_0eeDxHYl_cHq60tdVQqAXgaJBZqPaWmixvnVpc" />
                    </div>
                </div>
                <div class="text-on-surface-variant font-label-md py-2">
                    +5,000 khách hàng đã tin dùng
                </div>
            </div>
        </div>
        <!-- Right Side: Registration Form Card -->
        <div class="lg:col-span-6 w-full max-w-[520px] mx-auto">
            <div class="bg-surface-container-lowest p-md md:p-xl rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] border border-outline-variant/30">
                <div class="mb-lg">
                    <h1 class="font-headline-md text-on-surface mb-xs">Tạo tài khoản mới</h1>
                    <p class="font-body-md text-on-surface-variant">Bắt đầu hành trình thưởng thức hương vị tự nhiên.</p>
                </div>
                @if (session('info'))
                <div class="mb-md rounded-xl border border-blue-200 bg-blue-50 p-4 text-blue-900">
                    {{ session('info') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="mb-md rounded-xl border border-rose-200 bg-rose-50 p-4 text-rose-900">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('register.store') }}" method="POST" class="space-y-md">
                    @csrf
                    <!-- Full Name -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-on-surface-variant ml-1" for="full_name">Họ tên</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="person">person</span>
                            <input class="w-full pl-12 pr-4 py-3 bg-surface border-transparent rounded-lg focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary transition-all font-body-md" id="full_name" name="name" placeholder="Nguyễn Văn A" type="text" value="{{ old('name') }}" />
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-on-surface-variant ml-1" for="email">Email</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="mail">mail</span>
                            <input class="w-full pl-12 pr-4 py-3 bg-surface border-transparent rounded-lg focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary transition-all font-body-md" id="email" name="email" placeholder="example@email.com" type="email" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <!-- Phone Number -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-on-surface-variant ml-1" for="phone">Số điện thoại</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="phone_iphone">phone_iphone</span>
                            <input class="w-full pl-12 pr-4 py-3 bg-surface border-transparent rounded-lg focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary transition-all font-body-md" id="phone" name="phone" placeholder="090 123 4567" type="tel" value="{{ old('phone') }}" />
                        </div>
                    </div>
                    <!-- Password Cluster -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <div class="space-y-xs">
                            <label class="font-label-md text-on-surface-variant ml-1" for="password">Mật khẩu</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="lock">lock</span>
                                <input class="w-full pl-12 pr-4 py-3 bg-surface border-transparent rounded-lg focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary transition-all font-body-md" id="password" name="password" placeholder="••••••••" type="password" />
                            </div>
                        </div>
                        <div class="space-y-xs">
                            <label class="font-label-md text-on-surface-variant ml-1" for="confirm_password">Xác nhận</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline" data-icon="lock_reset">lock_reset</span>
                                <input class="w-full pl-12 pr-4 py-3 bg-surface border-transparent rounded-lg focus:ring-2 focus:ring-primary-fixed-dim focus:border-primary transition-all font-body-md" id="confirm_password" name="password_confirmation" placeholder="••••••••" type="password" />
                            </div>
                        </div>
                    </div>
                    <!-- Terms Checkbox -->
                    <div class="flex items-start gap-sm pt-xs">
                        <div class="flex items-center h-5">
                            <input class="w-5 h-5 rounded-md text-primary border-outline-variant focus:ring-primary focus:ring-offset-0 bg-surface" id="terms" type="checkbox" />
                        </div>
                        <label class="font-label-sm text-on-surface-variant leading-tight" for="terms">
                            Tôi đồng ý với <a class="text-primary font-bold hover:underline" href="#">Điều khoản dịch vụ</a> và <a class="text-primary font-bold hover:underline" href="#">Chính sách bảo mật</a> của FreshHarvest.
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <button class="w-full bg-primary text-white py-4 rounded-lg font-headline-sm hover:bg-primary-container transition-all duration-200 shadow-md hover:shadow-lg active:scale-95 flex items-center justify-center gap-sm cursor-pointer hover:cursor-pointer" type="submit">
                        Đăng ký ngay
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                    </button>
                    <!-- Social Login Option -->
                    <div class="relative flex py-4 items-center">
                        <div class="flex-grow border-t border-outline-variant"></div>
                        <span class="flex-shrink mx-4 font-label-sm text-outline">hoặc đăng ký với</span>
                        <div class="flex-grow border-t border-outline-variant"></div>
                    </div>
                    <div class="grid grid-cols-2 gap-md">
                        <button class="flex items-center justify-center gap-sm py-3 px-4 border border-outline-variant rounded-lg font-label-md text-on-surface-variant hover:bg-surface-container-low transition-colors cursor-pointer hover:cursor-pointer" type="button">
                            <img alt="Google Logo" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBqfek_8f9R80quIkiq8sgCgChK27Z0I89WkzeIIW2OXNewsqEVdN5XvhrNLEZTXtfIrPZPOSI8pyOgTu2xjfZ1TSN-O2H-Tm7QlgFIxlEoTJ66mrYivFHHyLhfkvsXN_haQE_7VQpr0inlwiFGgVtB1QL0gD43-gWgAFFrAC99DZn9YvSCcYFE3FWzIl8OU4XF9czterkFovgLNxkIb3UYOHnDU8uo31M-3YCLc5fy_QI0eO-1bG9sAFNj6qFiB5AiMy5xACZhUM" />
                            Google
                        </button>
                        <button class="flex items-center justify-center gap-sm py-3 px-4 border border-outline-variant rounded-lg font-label-md text-on-surface-variant hover:bg-surface-container-low transition-colors cursor-pointer hover:cursor-pointer" type="button">
                            <span class="material-symbols-outlined text-[#1877F2]" data-icon="facebook" style="font-variation-settings: 'FILL' 1;">social_leaderboard</span>
                            Facebook
                        </button>
                    </div>
                </form>
                <div class="mt-xl text-center md:hidden">
                    <span class="font-label-md text-on-surface-variant">Đã có tài khoản?</span>
                    <a class="font-label-md text-primary font-bold ml-1" href="/login">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
</main>