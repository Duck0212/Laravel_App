@extends('layouts.master')

@section('title', 'Product Detail')

@section('content')
<main class="mt-32 max-w-[1280px] mx-auto px-5 md:md:px-16">
    <!-- Breadcrumb -->
    <nav class="flex mb-8 space-x-2 text-xs font-semibold text-zinc-500">
        <a href="{{ route('home') }}">Trang chủ</a>
        <span>/</span>
        <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
        <span>/</span>
        <span class="text-emerald-800 font-bold">{{ $product->name }}</span>
    </nav>
    <!-- Product Hero Section -->
    <section class="grid grid-cols-1 md:grid-cols-12 gap-6 mb-20">
        <!-- Left: Image Gallery -->
        <div class="md:col-span-7 flex flex-col gap-sm">
            <div class="relative aspect-[4/5] bg-white rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                <img alt="Product Main Image" class="w-full h-full object-cover" data-alt="Close-up studio shot of vibrant, ripe organic strawberries with emerald green leaves, resting on a clean white surface. The lighting is bright and natural, highlighting the glistening water droplets on the fruit's red skin. The aesthetic is modern and high-end minimalist, emphasizing freshness, health, and organic vitality through a clean, lush presentation."
                    src="{{ $product->img }}" />
                <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                    <span class="material-symbols-outlined text-emerald-800 text-[18px]">eco</span>
                    <span class="text-xs font-semibold text-emerald-800">Được chứng nhận</span>
                </div>
            </div>
            <!-- Thumbnails -->
            <div class="flex gap-4 overflow-x-auto hide-scrollbar py-2">
                <button class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden border-2 border-emerald-800 cursor-pointer hover:cursor-pointer">
                    <img alt="Thumb 1" class="w-full h-full object-cover" data-alt="Thumbnail of fresh strawberries in a minimalist white bowl, bright natural lighting, soft shadows, vibrant red and green colors."
                        src="{{ $product->img }}" />
                </button>
                <button class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden border border-outline-variant hover:border-emerald-800 transition-colors cursor-pointer hover:cursor-pointer">
                    <img alt="Thumb 2" class="w-full h-full object-cover" data-alt="A top-down view of organic strawberries being washed under a clear stream of water, highlighting purity and freshness with crystal-clear water droplets and bright lighting."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTNCeSeaLaTN4ugu_kQTtuZ8FCZ_R7OAqEv9smtOg8plX22LpAigMp7ggJQQJJxMo303q-4t6JY4KH6tSNBa_HllpiMA0CAdw8IDuWfVW2YAsDqMBshDE4m4IartG970H1iTJXkyqg9tkWZE5EF4tjUyHlR72D-EqxgshljsVimYQeFTWi9rWia-R-tf1Leyqe31eCZMkzxjTQOCAQKuEiTJs875sN-vowCMHlYoW3PuodOBqgt8s2TMJsF6F_qBGvmJJSHBKY6q0" />
                </button>
                <button class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden border border-outline-variant hover:border-emerald-800 transition-colors cursor-pointer hover:cursor-pointer">
                    <img alt="Thumb 3" class="w-full h-full object-cover" data-alt="A macro shot of a sliced strawberry showing the intricate internal patterns, vibrant red juice, and seeds, presented on a minimalist wooden cutting board."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuALJF7CsaKYgxNHKnqYHL6Q53g5H6EoOGjXXKPPtPv80jyBtrghitReFu4BEe1sBfWCxHLG5qWPyuChuFKePuum9ZNkO-PMMaeYY7TEngOilKL09N2bs8nILm7UvqVg_4OswTaTMZQLJ-n5mf-UehH8_4n5nm6pY2yYT5QapOEU2gCjcOux7FD8GaDlG8Fgc1TMg6kKpt81dROz8k_IwIwZDE61IhZiG54blwue4jrGHK5-oNdU8agVUSAYjL8_tDAqwybLXJ0xtjo" />
                </button>
                <button class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden border border-outline-variant hover:border-emerald-800 transition-colors cursor-pointer hover:cursor-pointer">
                    <img alt="Thumb 4" class="w-full h-full object-cover" data-alt="An organic farm basket filled with a variety of fresh berries including strawberries, highlighting farm-to-table traceability and quality."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQob-obeMIb7kVtpG9GUduXKfR7AvZLSWd9BqhWxAl5XIKGRC-B5UTwDRUAbbKwrulYD6xwj6dzcn6PUZKcfPouGvnmITpmU1KFa0oo8wUS-qdqdBBpZJymGcyVgHj3ua5APJM5GnaqPX7RKsy3eKZ9g035_bzyTQeAE8xqBNQxw8jfWcZMNVNv0CMioz2uXGf7f79wSN_HsG6_Vaj1MNJKv1tfCBzkDlKi3T3oeylQUgUUk68y0CpwWS_yES_IPEpt9Frc0aRrpE" />
                </button>
            </div>
        </div>
        <!-- Right: Product Info -->
        <div class="md:col-span-5 flex flex-col justify-start">
            <div class="space-y-6">
                <div>
                    <span class="text-orange-700 font-label-md text-sm font-semibold tracking-[0.01em] tracking-wider uppercase">Loại cao cấp (Premium)</span>
                    <h1 class="font-display-lg text-3xl leading-[40px] font-extrabold tracking-tight md:text-5xl leading-[56px] font-extrabold tracking-tight text-zinc-900 mt-2">{{ $product->name }}</h1>
                    <div class="flex items-center gap-2 mt-2">
                        <div class="flex text-orange-400">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">star</span>
                        </div>
                        <span class="text-sm font-semibold tracking-[0.01em] text-zinc-500">(124 đánh giá)</span>
                    </div>
                </div>
                <div class="flex items-baseline gap-4">
                    <span class="font-display-lg text-2xl font-bold leading-8 md:text-5xl leading-[56px] font-extrabold tracking-tight text-emerald-800">{{ number_format($product->price, 0, ',', '.') }}VND</span>
                </div>
                <p class="text-base leading-6 text-zinc-500 leading-relaxed">
                    Những trái dâu tây mọng nước được trồng theo phương pháp hữu cơ tại vùng cao nguyên Đà Lạt. Không thuốc trừ sâu, không hóa chất, giữ trọn hương vị nguyên bản và hàm lượng vitamin C dồi dào.
                </p>
                <div class="space-y-4 pt-4">
                    <div class="flex items-center gap-6">
                        <span class="text-sm font-semibold tracking-[0.01em] font-bold w-20">Trọng lượng:</span>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 rounded-lg border-2 border-emerald-800 text-emerald-800 font-bold text-sm font-semibold tracking-[0.01em] cursor-pointer hover:cursor-pointer">500g</button>
                            <button class="px-4 py-2 rounded-lg border border-outline-variant text-zinc-500 text-sm font-semibold tracking-[0.01em] hover:border-emerald-800 cursor-pointer hover:cursor-pointer">1kg</button>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <span class="text-sm font-semibold tracking-[0.01em] font-bold w-20">Số lượng:</span>
                        <div class="flex items-center bg-zinc-100 rounded-full px-4 py-1">
                            <button class="w-8 h-8 flex items-center justify-center text-emerald-800 font-bold cursor-pointer hover:cursor-pointer"><span class="material-symbols-outlined">remove</span></button>
                            <input class="w-12 text-center bg-transparent border-none focus:ring-0 font-bold" type="text" value="1" />
                            <button class="w-8 h-8 flex items-center justify-center text-emerald-800 font-bold cursor-pointer hover:cursor-pointer"><span class="material-symbols-outlined">add</span></button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <form action="{{ route('cart.add') }}" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <div class="flex gap-4 items-center">
                            <label class="sr-only" for="quantity">Số lượng</label>
                            <input id="quantity" name="quantity" type="number" value="1" min="1" class="w-24 rounded-lg border border-zinc-200 px-4 py-3 text-sm font-semibold text-zinc-900" />
                            <button type="submit" class="flex-1 bg-emerald-800 text-on-primary py-4 rounded-lg font-bold hover:opacity-90 transition-all flex items-center justify-center gap-2 shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">shopping_cart</span>
                                Thêm vào giỏ hàng
                            </button>
                        </div>
                    </form>
                    <button class="p-4 border-2 border-emerald-800 text-emerald-800 rounded-lg hover:bg-emerald-200 transition-all cursor-pointer hover:cursor-pointer">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">favorite</span>
                    </button>
                </div>
                <div class="grid grid-cols-2 gap-4 pt-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-zinc-200/70 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-800">local_shipping</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold font-bold">Giao trong 2h</span>
                            <span class="text-xs text-zinc-500">Nội thành Đà Lạt &amp; TP.HCM</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-zinc-200/70 flex items-center justify-center">
                            <span class="material-symbols-outlined text-emerald-800">verified_user</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold font-bold">Cam kết 100% sạch</span>
                            <span class="text-xs text-zinc-500">Đền gấp 10 nếu sai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Tabs -->
    <section class="mb-20">
        <div class="border-b border-outline-variant flex gap-8">
            <button class="pb-4 text-emerald-800 border-b-2 border-emerald-800 font-bold text-sm font-semibold tracking-[0.01em] cursor-pointer hover:cursor-pointer">Giá trị dinh dưỡng</button>
            <button class="pb-4 text-zinc-500 hover:text-emerald-800 transition-colors text-sm font-semibold tracking-[0.01em] cursor-pointer hover:cursor-pointer">Nguồn gốc &amp; Farm Traceability</button>
            <button class="pb-4 text-zinc-500 hover:text-emerald-800 transition-colors text-sm font-semibold tracking-[0.01em] cursor-pointer hover:cursor-pointer">Đánh giá (124)</button>
        </div>
        <div class="py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
                <div class="space-y-4">
                    <h3 class="font-headline-md text-2xl font-bold leading-8">Sức mạnh từ thiên nhiên</h3>
                    <p class="text-base leading-6 text-zinc-500">Dâu tây là một nguồn cung cấp vitamin C, mangan dồi dào và cũng chứa lượng folate (vitamin B9) và kali dồi dào. Chúng rất giàu chất chống oxy hóa và các hợp chất thực vật, có thể có lợi cho sức khỏe tim mạch và kiểm soát lượng đường trong máu.</p>
                    <div class="space-y-3 pt-4">
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant">
                            <span class="text-base leading-6">Calories</span>
                            <span class="font-bold">32 kcal</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant">
                            <span class="text-base leading-6">Vitamin C</span>
                            <span class="font-bold">97% DV</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant">
                            <span class="text-base leading-6">Manganese</span>
                            <span class="font-bold">24% DV</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant">
                            <span class="text-base leading-6">Fibre</span>
                            <span class="font-bold">2g</span>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-100 rounded-2xl p-8 flex items-center justify-center">
                    <img alt="Nutritional Info Image" class="rounded-xl shadow-md w-full max-w-sm aspect-square object-cover" data-alt="A sophisticated graphic display of sliced strawberries on a clean background, highlighting the cellular structure and nutritional richness. The image has a soft, high-key light mode aesthetic with fresh green accents, symbolizing purity and processed quality as part of a high-end health product gallery."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlOWW1xGnV-iZ64wYp8MvhQBsOEkOTC7kaseyvL_aLQCD4IqwaXyxlHYlDSw5LHhO7szIHAbMKPKM3XecPWr2dKm0x9oJIHqy1fuPykrCVVcykJiaGDb5pb4OuuEiL0ph1nF7rgsgsf9rPPQzKhFuHIoq1UAsGliW3pRY9s5r-_1UE1xP0o5-9cSAwm6cx6fPRcOq3iz3a3l47lPKViosNEs-KToUh5mrcbjNXMB1JdufC9fSAgaRgzSE15rL2qlM5lZuAIZ9ylck" />
                </div>
            </div>
        </div>
    </section>
    <!-- Similar Products -->
    <section class="mb-20">
        <div class="flex justify-between items-end mb-lg">
            <div>
                <h2 class="font-display-lg text-2xl font-bold leading-8 md:text-2xl font-bold leading-8">Có thể bạn sẽ thích</h2>
                <p class="text-zinc-500 text-base leading-6 mt-1">Gợi ý những loại quả mọng tươi ngon nhất hôm nay.</p>
            </div>
            <button class="text-emerald-800 font-bold text-sm font-semibold tracking-[0.01em] flex items-center gap-1 hover:underline underline-offset-4 cursor-pointer hover:cursor-pointer">
                Xem tất cả <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="group bg-white rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-md transition-all duration-300 transform hover:scale-[1.02]">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img alt="Blueberry" class="w-full h-full object-cover" data-alt="A lush bunch of dark, organic blueberries with a dusty bloom, presented in a minimalist ceramic dish. High-key natural lighting, soft white space environment, vibrant indigo and deep blues."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPJXJzzIckud1CHg9bpNpeilOWJSXYmPIEODbwFYn_iNVcvbh1YAPrC106VOqdfJCZ13K8cxR51eqJfiW6D9SHyECxtQskLfegVzLERMxc4dNycuepe4yH67YzzR62Iw-5w_ijQSmFcbdcyv3GyH2fblBHh3rLcZQVgbojy7-6hbQAylMvN3vTph6rYr2s7uA4mr6hGEXIRNrzf-SKF2I_5yiWHPxNeLVaxsukqj2STmtoeGdGGErHo2DuyedeGWM6a7S7kRolEZs" />
                    <button class="absolute bottom-4 right-4 bg-emerald-800 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer hover:cursor-pointer">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
                <div class="p-4">
                    <h4 class="font-headline-sm text-xl font-bold leading-7">Việt Quất Hữu Cơ</h4>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-emerald-800 font-bold">95.000đ</span>
                        <span class="text-xs text-zinc-500">/ 125g</span>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="group bg-white rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-md transition-all duration-300 transform hover:scale-[1.02]">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img alt="Raspberry" class="w-full h-full object-cover" data-alt="A close up of vibrant red raspberries in a textured white basket, bright morning light filtering through a window, lush red color palette, soft shadows, fresh organic feel."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyC0fOJjt8_bFuJq8b7Igxd1frzKioT0oYdCuFP3iOkHu1Ah6WM18lqr9ZrEwSA6-yDs3zIYTHrF0C-R0eK1FDW2Or5pxPgUPUCsEdOWvKsvgXfjzr1aJvu74zoHu1e4GMM6OZD4ADMLlIjoxvH6oZxZWxAAkxoJLrR8reL4X6sCuoYJ0H6KPwzfTbKm1xxcOm8Lfd1KX1hqbfdqCv-rv1h92jZZaMizDrihMiJx0sENBrnQmFIVRt6118it1-_f4ILbET9ys0rJw" />
                    <button class="absolute bottom-4 right-4 bg-emerald-800 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer hover:cursor-pointer">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
                <div class="p-4">
                    <h4 class="font-headline-sm text-xl font-bold leading-7">Mâm Xôi Đỏ</h4>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-emerald-800 font-bold">120.000đ</span>
                        <span class="text-xs text-zinc-500">/ 150g</span>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="group bg-white rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-md transition-all duration-300 transform hover:scale-[1.02]">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img alt="Blackberry" class="w-full h-full object-cover" data-alt="Deep black blackberries glistening in the sun on a white marble slab, minimalist aesthetic, rich textures, vibrant contrast, high-end food photography."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5BYSmL5FPs-sxk-g-R1EuqwEtL2BetzRCBkJQeYX7Be59O0wXtwnrY3AkEy_pYHYCSU5I3ryzkvPc6ikYb3Dt3VLtlZeWZVaJaAumS5bU9vWP70d3FE1zKy8GlZWG1FXG_p0-s0xceAwAP8a8Z-Do-AjbuCaWfgrhISoIFROZRnj-aronZnuHPKLAyIgBYbKnicmd3BLOwqeRn90t5SJ_fAGHDxd3eIcKjqGVWlmBqlPFFVxPSJbI6bRIsWnIW9DSwvjnhDHSFGk" />
                    <button class="absolute bottom-4 right-4 bg-emerald-800 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer hover:cursor-pointer">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
                <div class="p-4">
                    <h4 class="font-headline-sm text-xl font-bold leading-7">Mâm Xôi Đen</h4>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-emerald-800 font-bold">115.000đ</span>
                        <span class="text-xs text-zinc-500">/ 150g</span>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="group bg-white rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-md transition-all duration-300 transform hover:scale-[1.02]">
                <div class="aspect-[4/5] overflow-hidden relative">
                    <img alt="Mix Berry" class="w-full h-full object-cover" data-alt="A mix of fresh berries in a eco-friendly wooden box, including strawberries and blueberries, high key lighting, white background, emphasizing the box options."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuSCTf1HXi8coSWYQVPDpfMLeWLa7UhLXHDdUW2Q4-fk73F6hgS5E8yobesINJvnKRJ7AwiLRHjoUH1WNl7VB84Gg-SQiWb5GzGYgTEfaTRJn9lesIhj1UvOJJa-uKSRzMfEL9tHM6b7sf0T0ogQXU1-zx1i9YfNpdfLIZJ1xZb0JNG38mvf2DmQUSTnXetmVi1mKD62-IUIvxHdm0HiQTFT7fKIqYrob90osJ9ZXgCBmKSolWzm7gMxAT0yAE0jIPehNYlb4F-LI" />
                    <button class="absolute bottom-4 right-4 bg-emerald-800 text-white p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer hover:cursor-pointer">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
                <div class="p-4">
                    <h4 class="font-headline-sm text-xl font-bold leading-7">Berry Mix Box</h4>
                    <div class="flex justify-between items-center mt-2">
                        <span class="text-emerald-800 font-bold">250.000đ</span>
                        <span class="text-xs text-zinc-500">/ 500g</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
