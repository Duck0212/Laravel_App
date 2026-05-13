@extends('layouts.master')

@section('title', 'Checkout')

@section('content')
<main class="mt-20 pt-lg pb-xl px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto">
    @if(session('success'))
    <div class="mb-lg rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-900">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="mb-lg rounded-xl border border-rose-200 bg-rose-50 p-4 text-rose-900">
        {{ session('error') }}
    </div>
    @endif
    @if($errors->any())
    <div class="mb-lg rounded-xl border border-rose-200 bg-rose-50 p-4 text-rose-900">
        <ul class="list-disc pl-5 space-y-1">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="flex items-center justify-center mb-xl">
        <div class="flex items-center space-x-sm">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white font-bold text-sm">1</div>
            <span class="font-label-md text-label-md text-primary">Giỏ hàng</span>
        </div>
        <div class="w-16 h-[2px] bg-outline-variant mx-md"></div>
        <div class="flex items-center space-x-sm">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white font-bold text-sm">2</div>
            <span class="font-label-md text-label-md text-primary">Thanh toán</span>
        </div>
        <div class="w-16 h-[2px] bg-outline-variant mx-md"></div>
        <div class="flex items-center space-x-sm opacity-40">
            <div class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface-variant font-bold text-sm">3</div>
            <span class="font-label-md text-label-md text-on-surface-variant">Hoàn tất</span>
        </div>
    </div>

    <form action="{{ route('checkout.process') }}" method="POST" id="checkoutForm" class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
        @csrf

        <div class="lg:col-span-8 space-y-md">
            <section class="bg-surface-container-lowest rounded-xl p-md shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                <div class="flex items-center space-x-sm mb-md">
                    <span class="material-symbols-outlined text-primary">local_shipping</span>
                    <h2 class="font-headline-sm text-headline-sm">Thông tin giao hàng</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant" for="name">Họ và tên</label>
                        <input id="name" name="name" value="{{ old('name') }}" class="w-full bg-surface border-none rounded-lg p-md text-body-md focus:ring-2 focus:ring-primary/20 placeholder:text-outline" placeholder="Nguyễn Văn A" type="text" />
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant" for="phone">Số điện thoại</label>
                        <input id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-surface border-none rounded-lg p-md text-body-md focus:ring-2 focus:ring-primary/20 placeholder:text-outline" placeholder="090 123 4567" type="tel" />
                    </div>
                    <div class="md:col-span-2 space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant" for="address">Địa chỉ chi tiết</label>
                        <input id="address" name="address" value="{{ old('address') }}" class="w-full bg-surface border-none rounded-lg p-md text-body-md focus:ring-2 focus:ring-primary/20 placeholder:text-outline" placeholder="Số nhà, tên đường, phường/xã..." type="text" />
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant" for="city">Tỉnh/Thành phố</label>
                        <select id="city" name="city" class="w-full bg-surface border-none rounded-lg p-md text-body-md focus:ring-2 focus:ring-primary/20">
                            <option value="TP. Hồ Chí Minh" {{ old('city') === 'TP. Hồ Chí Minh' ? 'selected' : '' }}>TP. Hồ Chí Minh</option>
                            <option value="Hà Nội" {{ old('city') === 'Hà Nội' ? 'selected' : '' }}>Hà Nội</option>
                            <option value="Đà Nẵng" {{ old('city') === 'Đà Nẵng' ? 'selected' : '' }}>Đà Nẵng</option>
                        </select>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant" for="district">Quận/Huyện</label>
                        <select id="district" name="district" class="w-full bg-surface border-none rounded-lg p-md text-body-md focus:ring-2 focus:ring-primary/20">
                            <option value="Quận 1" {{ old('district') === 'Quận 1' ? 'selected' : '' }}>Quận 1</option>
                            <option value="Quận 3" {{ old('district') === 'Quận 3' ? 'selected' : '' }}>Quận 3</option>
                            <option value="Quận Bình Thạnh" {{ old('district') === 'Quận Bình Thạnh' ? 'selected' : '' }}>Quận Bình Thạnh</option>
                        </select>
                    </div>
                </div>
            </section>

            <section class="bg-surface-container-lowest rounded-xl p-md shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                <div class="flex items-center space-x-sm mb-md">
                    <span class="material-symbols-outlined text-primary">payments</span>
                    <h2 class="font-headline-sm text-headline-sm">Phương thức thanh toán</h2>
                </div>
                <div class="space-y-sm payment-methods">
                    <label class="payment-option flex items-center p-md border-2 border-primary bg-primary/5 rounded-lg cursor-pointer group transition-all duration-300 hover:shadow-md {{ old('payment', 'cod') === 'cod' ? 'selected' : '' }}" data-value="cod">
                        <input class="text-primary focus:ring-primary w-5 h-5" name="payment" value="cod" type="radio" {{ old('payment', 'cod') === 'cod' ? 'checked' : '' }} />
                        <div class="ml-md flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface">Thanh toán khi nhận hàng (COD)</span>
                            <span class="text-xs text-on-surface-variant">Giao hàng và thu tiền tận nơi</span>
                        </div>
                        <span class="material-symbols-outlined ml-auto text-primary transition-all duration-300">local_atm</span>
                    </label>
                    <label class="payment-option flex items-center p-md border-2 border-outline-variant hover:border-primary/50 rounded-lg cursor-pointer transition-all duration-300 hover:shadow-md group {{ old('payment') === 'bank' ? 'selected' : '' }}" data-value="bank">
                        <input class="text-primary focus:ring-primary w-5 h-5" name="payment" value="bank" type="radio" {{ old('payment') === 'bank' ? 'checked' : '' }} />
                        <div class="ml-md flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface">Chuyển khoản ngân hàng</span>
                            <span class="text-xs text-on-surface-variant">Quét mã QR hoặc chuyển khoản nhanh</span>
                        </div>
                        <span class="material-symbols-outlined ml-auto text-on-surface-variant transition-all duration-300">account_balance</span>
                    </label>
                    <label class="payment-option flex items-center p-md border-2 border-outline-variant hover:border-primary/50 rounded-lg cursor-pointer transition-all duration-300 hover:shadow-md group {{ old('payment') === 'wallet' ? 'selected' : '' }}" data-value="wallet">
                        <input class="text-primary focus:ring-primary w-5 h-5" name="payment" value="wallet" type="radio" {{ old('payment') === 'wallet' ? 'checked' : '' }} />
                        <div class="ml-md flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface">Ví điện tử MoMo / ZaloPay</span>
                            <span class="text-xs text-on-surface-variant">Thanh toán nhanh chóng, an toàn</span>
                        </div>
                        <span class="material-symbols-outlined ml-auto text-on-surface-variant transition-all duration-300">wallet</span>
                    </label>
                </div>
            </section>
        </div>

        <div class="lg:col-span-4 lg:sticky lg:top-24 space-y-md">
            <div class="bg-surface-container-lowest rounded-xl p-md shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                <h2 class="font-headline-sm text-headline-sm mb-md">Tóm tắt đơn hàng</h2>
                <div class="space-y-md mb-lg">
                    @forelse($cartProducts as $item)
                    <div class="flex items-center space-x-md">
                        <div class="relative w-16 h-20 rounded-lg overflow-hidden flex-shrink-0 bg-white">
                            <img class="w-full h-full object-cover" src="{{ $item->img }}" alt="{{ $item->name }}" />
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-label-md text-label-md text-on-surface">{{ $item->name }}</h3>
                            <p class="font-body-md text-body-md text-primary">{{ number_format($item->price) }}đ x {{ $item->quantity }}</p>
                        </div>
                        <div class="font-bold text-on-surface">{{ number_format($item->subtotal) }}đ</div>
                    </div>
                    @empty
                    <div class="text-on-surface-variant">Không có sản phẩm trong giỏ hàng.</div>
                    @endforelse
                </div>

                @php
                $shipping = $total >= 500000 ? 0 : 25000;
                $discount = 0;
                $grandTotal = $total + $shipping - $discount;
                @endphp

                <div class="border-t border-outline-variant pt-md space-y-sm">
                    <div class="flex justify-between text-body-md text-on-surface-variant">
                        <span>Tạm tính</span>
                        <span>{{ number_format($total) }}đ</span>
                    </div>
                    <div class="flex justify-between text-body-md text-on-surface-variant">
                        <span>Phí vận chuyển</span>
                        <span>{{ $shipping > 0 ? number_format($shipping) . 'đ' : 'Miễn phí' }}</span>
                    </div>
                    <div class="flex justify-between text-body-md text-secondary font-semibold">
                        <span>Giảm giá</span>
                        <span>{{ $discount > 0 ? '-' . number_format($discount) . 'đ' : '0đ' }}</span>
                    </div>
                    <div class="border-t border-outline-variant mt-sm pt-sm flex justify-between items-end">
                        <span class="font-headline-sm text-headline-sm">Tổng cộng</span>
                        <span class="font-display-lg text-headline-md text-primary">{{ number_format($grandTotal) }}đ</span>
                    </div>
                </div>
                <button type="button" onclick="handleCheckoutSubmit(event)" class="w-full bg-primary text-white font-headline-sm text-headline-sm py-md rounded-lg mt-lg shadow-md hover:shadow-lg hover:scale-[1.02] transition-all duration-200 flex items-center justify-center space-x-sm cursor-pointer hover:cursor-pointer">
                    <span>Đặt hàng ngay</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
                <p class="text-[11px] text-on-surface-variant text-center mt-md italic">
                    Bằng cách đặt hàng, bạn đồng ý với Điều khoản &amp; Chính sách của FreshHarvest.
                </p>
            </div>
            <div class="bg-primary-container/10 border border-primary-fixed-dim rounded-xl p-md flex items-start space-x-md">
                <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">verified</span>
                <div>
                    <h4 class="font-label-md text-label-md text-primary">Cam kết tươi ngon 100%</h4>
                    <p class="text-xs text-on-surface-variant leading-relaxed">Nếu sản phẩm không đạt chất lượng như cam kết, chúng tôi hoàn tiền hoặc đổi trả trong 24h.</p>
                </div>
            </div>
        </div>
    </form>
</main>

<script>
    function handleCheckoutSubmit(event) {
        event.preventDefault();

        // Check if user is authenticated
        @if(Auth::check())
        // Validate form fields
        if (!validateCheckoutForm()) {
            return;
        }
        // User is logged in, submit the form
        document.getElementById('checkoutForm').submit();
        @else
        // User is not logged in, redirect to login
        const returnUrl = "{{ route('checkout') }}";
        window.location.href = "{{ route('login') }}?redirect=" + encodeURIComponent(returnUrl);
        @endif
    }

    function validateCheckoutForm() {
        const form = document.getElementById('checkoutForm');
        const requiredFields = [{
                name: 'name',
                label: 'Họ và tên'
            },
            {
                name: 'phone',
                label: 'Số điện thoại'
            }, {
                name: 'address',
                label: 'Địa chỉ chi tiết'
            }
        ];

        const errors = [];

        // Check required fields
        requiredFields.forEach(field => {
            const input = form.querySelector(`[name="${field.name}"]`);
            if (!input || !input.value.trim()) {
                errors.push(`${field.label} không được để trống`);
            }
        });

        // Validate phone number format
        const phoneInput = form.querySelector('[name="phone"]');
        if (phoneInput && phoneInput.value.trim()) {
            const phoneRegex = /^(\+84|0)[0-9]{9,10}$/;
            if (!phoneRegex.test(phoneInput.value.trim())) {
                errors.push('Số điện thoại không hợp lệ (vui lòng nhập từ 10-11 chữ số)');
            }
        }

        // If there are errors, display them
        if (errors.length > 0) {
            showErrorNotification(errors);
            return false;
        }

        return true;
    }

    function showErrorNotification(errors) {
        // Remove existing error notification if present
        const existingError = document.querySelector('.error-notification');
        if (existingError) {
            existingError.remove();
        }

        // Create error notification
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-notification fixed top-20 left-1/2 transform -translate-x-1/2 z-50 bg-rose-50 border-2 border-rose-200 rounded-xl p-5 shadow-lg max-w-md w-11/12 animate-slide-down';

        let errorHTML = '<div class="flex items-start space-x-3">';
        errorHTML += '<span class="material-symbols-outlined text-rose-600 flex-shrink-0">error</span>';
        errorHTML += '<div class="flex-grow">';
        errorHTML += '<h3 class="font-headline-sm text-rose-900 mb-2">Vui lòng kiểm tra thông tin</h3>';
        errorHTML += '<ul class="list-disc pl-5 space-y-1 text-rose-800 text-sm">';

        errors.forEach(error => {
            errorHTML += `<li>${error}</li>`;
        });

        errorHTML += '</ul>';
        errorHTML += '</div>';
        errorHTML += '<button onclick="this.closest(\'.error-notification\').remove()" class="text-rose-600 hover:text-rose-900 flex-shrink-0 ml-2">';
        errorHTML += '<span class="material-symbols-outlined">close</span>';
        errorHTML += '</button>';
        errorHTML += '</div>';

        errorDiv.innerHTML = errorHTML;
        document.body.insertBefore(errorDiv, document.body.firstChild);

        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (errorDiv.parentElement) {
                errorDiv.remove();
            }
        }, 5000);

        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Payment method selection handling
    function initPaymentMethodSelection() {
        const paymentOptions = document.querySelectorAll('.payment-option');

        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                paymentOptions.forEach(opt => {
                    opt.classList.remove('selected');
                    opt.classList.remove('border-primary', 'bg-primary/5');
                    opt.classList.add('border-outline-variant');

                    // Update icon color
                    const icon = opt.querySelector('.material-symbols-outlined:last-child');
                    if (icon) {
                        icon.classList.remove('text-primary');
                        icon.classList.add('text-on-surface-variant');
                    }
                });

                // Add selected class to clicked option
                this.classList.add('selected');
                this.classList.remove('border-outline-variant');
                this.classList.add('border-primary', 'bg-primary/5');

                // Update icon color
                const icon = this.querySelector('.material-symbols-outlined:last-child');
                if (icon) {
                    icon.classList.remove('text-on-surface-variant');
                    icon.classList.add('text-primary');
                }

                // Check the radio button
                const radio = this.querySelector('input[type="radio"]');
                if (radio) {
                    radio.checked = true;
                }
            });
        });
    }

    // Initialize payment method selection on page load
    document.addEventListener('DOMContentLoaded', function() {
        initPaymentMethodSelection();

        // Set initial selected state based on checked radio button
        const checkedRadio = document.querySelector('input[name="payment"]:checked');
        if (checkedRadio) {
            const selectedOption = checkedRadio.closest('.payment-option');
            if (selectedOption) {
                selectedOption.classList.add('selected');
                selectedOption.classList.remove('border-outline-variant');
                selectedOption.classList.add('border-primary', 'bg-primary/5');

                const icon = selectedOption.querySelector('.material-symbols-outlined:last-child');
                if (icon) {
                    icon.classList.remove('text-on-surface-variant');
                    icon.classList.add('text-primary');
                }
            }
        }
    });
</script>

<style>
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translate(-50%, -20px);
        }

        to {
            opacity: 1;
            transform: translate(-50%, 0);
        }
    }

    .animate-slide-down {
        animation: slideDown 0.3s ease-out;
    }

    /* Payment method selection styles */
    .payment-option {
        position: relative;
        overflow: hidden;
    }

    .payment-option::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .payment-option:hover::before {
        left: 100%;
    }

    .payment-option.selected {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .payment-option.selected .material-symbols-outlined:last-child {
        transform: scale(1.1);
    }

    .payment-methods .payment-option:not(.selected) {
        opacity: 0.8;
    }

    .payment-methods .payment-option:not(.selected):hover {
        opacity: 1;
        transform: translateY(-1px);
    }
</style>

@endsection