<!DOCTYPE html>

<html class="light" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'FreshHarvest') - FreshHarvest</title>
    <link rel="stylesheet" href="{{ asset('build/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #F8F9FA;
            color: #191C1D;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Custom CSS Variables for consistent theming */
        :root {
            --primary: #22c55e;
            --primary-container: #dcfce7;
            --on-primary: #ffffff;
            --surface: #ffffff;
            --surface-container-lowest: #fafafa;
            --surface-container-low: #f5f5f5;
            --on-surface: #191c1d;
            --on-surface-variant: #6b7280;
            --outline: #d1d5db;
            --outline-variant: #e5e7eb;
            --secondary: #f59e0b;
        }

        /* Typography Scale */
        .font-display-lg {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.1;
        }

        .font-headline-md {
            font-size: 1.875rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .font-headline-sm {
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.3;
        }

        .font-label-md {
            font-size: 0.875rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .font-label-sm {
            font-size: 0.75rem;
            font-weight: 500;
            line-height: 1.5;
        }

        .font-body-lg {
            font-size: 1.125rem;
            font-weight: 400;
            line-height: 1.6;
        }

        .font-body-md {
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Spacing Scale */
        .px-margin-mobile {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-margin-desktop {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .space-y-xs {
            margin-top: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .space-y-sm {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .space-y-md {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .space-y-lg {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .space-y-xl {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .gap-gutter {
            gap: 1.5rem;
        }

        .gap-sm {
            gap: 0.5rem;
        }

        .gap-md {
            gap: 1rem;
        }

        .gap-lg {
            gap: 1.5rem;
        }

        .gap-xl {
            gap: 2rem;
        }

        /* Padding Scale */
        .p-xs {
            padding: 0.25rem;
        }

        .p-sm {
            padding: 0.5rem;
        }

        .p-md {
            padding: 1rem;
        }

        .p-lg {
            padding: 1.5rem;
        }

        .p-xl {
            padding: 2rem;
        }

        /* Margin Scale */
        .m-xs {
            margin: 0.25rem;
        }

        .m-sm {
            margin: 0.5rem;
        }

        .m-md {
            margin: 1rem;
        }

        .m-lg {
            margin: 1.5rem;
        }

        .m-xl {
            margin: 2rem;
        }

        .mt-20 {
            margin-top: 5rem;
        }

        .mb-xs {
            margin-bottom: 0.25rem;
        }

        .mb-sm {
            margin-bottom: 0.5rem;
        }

        .mb-md {
            margin-bottom: 1rem;
        }

        .mb-lg {
            margin-bottom: 1.5rem;
        }

        .mb-xl {
            margin-bottom: 2rem;
        }

        /* Color Classes */
        .text-primary {
            color: var(--primary);
        }

        .text-on-primary {
            color: var(--on-primary);
        }

        .text-on-surface {
            color: var(--on-surface);
        }

        .text-on-surface-variant {
            color: var(--on-surface-variant);
        }

        .text-secondary {
            color: var(--secondary);
        }

        .bg-primary {
            background-color: var(--primary);
        }

        .bg-surface {
            background-color: var(--surface);
        }

        .bg-surface-container-lowest {
            background-color: var(--surface-container-lowest);
        }

        .bg-surface-container-low {
            background-color: var(--surface-container-low);
        }

        .bg-primary-container {
            background-color: var(--primary-container);
        }

        .border-outline {
            border-color: var(--outline);
        }

        .border-outline-variant {
            border-color: var(--outline-variant);
        }

        /* Responsive Text */
        @media (max-width: 768px) {
            .text-display-lg-mobile {
                font-size: 2.5rem;
            }
        }

        /* Mobile Menu Animation */
        #mobileMenu .relative {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        #mobileMenu:not(.hidden) .relative {
            transform: translateX(0);
        }

        /* Improved FAB Animation */
        .fixed.bottom-6.right-6>a:hover {
            transform: scale(1.1) rotate(5deg);
        }

        /* Better focus states */
        button:focus,
        a:focus {
            outline: 2px solid var(--primary);
            outline-offset: 2px;
        }
    </style>
</head>

<body class="bg-surface-container-lowest text-on-surface pt-20">
    <!-- TopAppBar Section -->
    <header class="fixed top-0 z-50 w-full bg-white/95 backdrop-blur-sm shadow-sm h-20 flex items-center border-b border-gray-200">
        <div class="flex justify-between items-center w-full px-4 md:px-8 max-w-[1280px] mx-auto">
            <div class="font-bold text-3xl tracking-tight text-gray-900">FreshHarvest</div>
            <nav class="hidden md:flex items-center space-x-8">
                <a class="text-sm font-semibold text-gray-900 border-b-2 border-emerald-700 pb-1" href="{{ route('home') }}">Trang chủ</a>
                <div class="relative group">
                    <button class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors inline-flex items-center gap-1" type="button">
                        Danh mục
                        <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                    </button>
                    <div class="hidden group-hover:block absolute z-20 mt-2 w-48 bg-white border border-gray-200 rounded-xl shadow-lg py-2">
                        @foreach($categoryList as $category)
                        <a href="{{ route('category', $category->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <a class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors" href="{{ route('home') }}#products">Sản phẩm</a>
                <a class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors" href="#">Về chúng tôi</a>
                <a class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors" href="#">Liên hệ</a>
            </nav>
            <div class="flex items-center space-x-4">
                <form action="{{ route('search') }}" method="GET" class="hidden lg:flex items-center bg-gray-100 px-4 py-2 rounded-full w-64 shadow-sm">
                    <span class="material-symbols-outlined text-gray-500 mr-2">search</span>
                    <input name="q" class="bg-transparent border-none focus:ring-0 text-sm font-medium w-full p-0" placeholder="Tìm kiếm sản phẩm..." type="text" value="{{ request('q') }}" />
                </form>
                <a href="{{ route('cart') }}" class="relative p-2 hover:bg-gray-100 rounded-full transition-all duration-200">
                    <span class="material-symbols-outlined text-gray-900">shopping_cart</span>
                    @php $cartQuantity = array_sum(array_column(session('cart', []), 'quantity')); @endphp
                    @if($cartQuantity > 0)
                    <span class="absolute -top-1 -right-1 inline-flex h-5 min-w-[20px] items-center justify-center rounded-full bg-primary text-white text-[10px] font-bold px-1">{{ $cartQuantity }}</span>
                    @endif
                </a>
                <button class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 cursor-pointer hover:cursor-pointer relative md:hidden" id="mobileMenuButton">
                    <span class="material-symbols-outlined text-gray-900">menu</span>
                </button>
                <button class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200 cursor-pointer hover:cursor-pointer relative" id="userMenuButton">
                    <span class="material-symbols-outlined text-gray-900">person</span>
                </button>

                <!-- User Dropdown Menu -->
                <div class="hidden absolute top-full right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50" id="userMenu">
                    @auth
                    <div class="px-4 py-2 border-b border-gray-200">
                        <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tài khoản của tôi</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đơn hàng của tôi</a>
                    <div class="border-t border-gray-200 my-1"></div>
                    <form action="{{ route('logout') }}" method="POST" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng xuất</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Đăng ký</a>
                    @endauth
                </div>

                <!-- Mobile Menu -->
                <div class="hidden fixed inset-0 z-40 md:hidden" id="mobileMenu">
                    <div class="absolute inset-0 bg-black bg-opacity-50" id="mobileMenuBackdrop"></div>
                    <div class="relative bg-white w-80 max-w-[90vw] h-full shadow-xl">
                        <div class="flex items-center justify-between p-4 border-b border-gray-200">
                            <div class="font-bold text-xl text-gray-900">FreshHarvest</div>
                            <button class="p-2 hover:bg-gray-100 rounded-full transition-all duration-200" id="closeMobileMenu">
                                <span class="material-symbols-outlined text-gray-900">close</span>
                            </button>
                        </div>
                        <div class="p-4 space-y-4">
                            <form action="{{ route('search') }}" method="GET" class="flex items-center bg-gray-100 px-4 py-2 rounded-full">
                                <span class="material-symbols-outlined text-gray-500 mr-2">search</span>
                                <input name="q" class="bg-transparent border-none focus:ring-0 text-sm font-medium w-full p-0" placeholder="Tìm kiếm sản phẩm..." type="text" value="{{ request('q') }}" />
                            </form>
                            <nav class="space-y-2">
                                <a class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" href="{{ route('home') }}">Trang chủ</a>
                                <a class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" href="{{ route('home') }}#products">Sản phẩm</a>
                                <a class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" href="#">Về chúng tôi</a>
                                <a class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" href="#">Liên hệ</a>
                                <a class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors" href="{{ route('cart') }}">
                                    Giỏ hàng
                                    @php $cartQuantity = array_sum(array_column(session('cart', []), 'quantity')); @endphp
                                    @if($cartQuantity > 0)
                                    <span class="inline-flex h-5 min-w-[20px] items-center justify-center rounded-full bg-primary text-white text-xs font-bold px-1 ml-2">{{ $cartQuantity }}</span>
                                    @endif
                                </a>
                            </nav>
                            <div class="border-t border-gray-200 pt-4">
                                @auth
                                <div class="px-4 py-2 bg-gray-50 rounded-lg mb-4">
                                    <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                                    <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                                </div>
                                <a href="#" class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">Tài khoản của tôi</a>
                                <a href="#" class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">Đơn hàng của tôi</a>
                                <form action="{{ route('logout') }}" method="POST" class="mt-4">
                                    @csrf
                                    <button type="submit" class="w-full bg-red-500 text-white px-4 py-3 rounded-lg hover:bg-red-600 transition-colors">Đăng xuất</button>
                                </form>
                                @else
                                <a href="{{ route('login') }}" class="block px-4 py-3 text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">Đăng nhập</a>
                                <a href="{{ route('register') }}" class="block px-4 py-3 text-primary hover:bg-primary hover:text-white rounded-lg transition-colors">Đăng ký</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Footer Section -->
    <footer class="bg-slate-50 border-t border-outline-variant py-24">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 w-full px-4 md:px-8 max-w-[1280px] mx-auto">
            <div class="col-span-1 md:col-span-1">
                <div class="font-bold text-xl text-gray-900 mb-4">FreshHarvest</div>
                <p class="font-body-md text-gray-600 mb-4">Mang đến những loại trái cây hữu cơ tươi ngon và tốt cho sức khỏe nhất thế giới trực tiếp đến bàn ăn của bạn với tình yêu thương và sự tận tâm.</p>
                <div class="flex space-x-4">
                    <a class="text-gray-900 hover:opacity-80 transition-opacity" href="#"><span class="material-symbols-outlined">social_leaderboard</span></a>
                    <a class="text-gray-900 hover:opacity-80 transition-opacity" href="#"><span class="material-symbols-outlined">camera_alt</span></a>
                    <a class="text-gray-900 hover:opacity-80 transition-opacity" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
                </div>
            </div>
            <div>
                <h4 class="font-label-md text-gray-900 mb-4">Sản phẩm</h4>
                <ul class="space-y-2">
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="{{ route('home') }}#products">Trái cây theo mùa</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Hộp quà tặng</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Đặt hàng định kỳ</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Chứng nhận hữu cơ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-gray-900 mb-4">Hỗ trợ</h4>
                <ul class="space-y-2">
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Vận chuyển</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Theo dõi đơn hàng</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Chính sách đổi trả</a></li>
                    <li><a class="text-gray-600 hover:text-emerald-700 underline-offset-4 hover:underline transition-opacity" href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-gray-900 mb-4">Đăng ký nhận tin</h4>
                <p class="text-xs text-gray-600 mb-4">Nhận thông tin về sản phẩm mới và ưu đãi đặc biệt.</p>
                <form class="flex gap-2">
                    <input class="bg-white border-none rounded-lg text-sm font-medium w-full px-4 focus:ring-primary" placeholder="Email của bạn" type="email" />
                    <button class="bg-primary text-white p-2 rounded-lg cursor-pointer hover:cursor-pointer"><span class="material-symbols-outlined">send</span></button>
                </form>
            </div>
        </div>
        <div class="w-full px-4 md:px-8 max-w-[1280px] mx-auto mt-xl pt-md border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="font-body-md text-base text-gray-600">© 2026 FreshHarvest Organic Vitality. Tất cả quyền được bảo lưu.</p>
            <div class="flex gap-6">
                <a class="text-gray-600 text-xs hover:text-gray-900" href="#">Liên hệ</a>
                <a class="text-gray-600 text-xs hover:text-gray-900" href="#">Tuyển dụng</a>
                <a class="text-gray-600 text-xs hover:text-gray-900" href="#">Trung tâm trợ giúp</a>
            </div>
        </div>
    </footer>
    <!-- FAB for quick cart access on mobile -->
    <div class="fixed bottom-6 right-6 md:hidden z-40">
        <a href="{{ route('cart') }}" class="relative bg-primary text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center hover:shadow-xl transition-all duration-200 hover:scale-110">
            <span class="material-symbols-outlined">shopping_cart</span>
            @php $cartQuantity = array_sum(array_column(session('cart', []), 'quantity')); @endphp
            @if($cartQuantity > 0)
            <span class="absolute -top-2 -right-2 inline-flex h-6 min-w-[24px] items-center justify-center rounded-full bg-red-500 text-white text-xs font-bold px-1">{{ $cartQuantity }}</span>
            @endif
        </a>
    </div>

    <script>
        // User menu dropdown toggle
        document.getElementById('userMenuButton').addEventListener('click', function(e) {
            e.stopPropagation();
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            const menu = document.getElementById('userMenu');
            const button = document.getElementById('userMenuButton');
            if (!menu.contains(e.target) && !button.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.remove('hidden');
        });

        // Close mobile menu
        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.add('hidden');
        });

        document.getElementById('mobileMenuBackdrop').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.add('hidden');
        });
    </script>
</body>

</html>