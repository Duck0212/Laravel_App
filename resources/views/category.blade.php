@extends('layouts.master')

@section('title', 'category')

@section('content')
<main class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop py-base">
    <!-- Category Banner -->
    <section class="relative w-full h-[300px] md:h-[400px] rounded-xl overflow-hidden mb-lg">
        <img alt="Tropical Fruits Banner" class="w-full h-full object-cover" data-alt="A lush and vibrant collection of tropical fruits including sliced dragon fruit, golden mangoes, and ruby red papayas arranged on a clean white marble surface. The lighting is bright and natural, casting soft shadows that emphasize the juicy texture and peak ripeness of the produce. The overall aesthetic is high-end and organic, mirroring the FreshHarvest brand colors of deep greens and vibrant oranges in a modern minimalist setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBu9a20euMsGncjyopVbvm3Bfoikdk3MV57HkyFyBFR4Ggz5S5sdcPi2nhUQabHkWsvNanG66PB36jTozgsCrtd72iznXMb9MdFlG_uISwj8a070Kk7VkvLvtCAUrItK2MCHyyTjcm8NrYQzKqOu0D81sRXph6djd_pbDcGmOJPaQzCOX1SGuuulGJYgXuq3r0pJwqF4mYsp29hFvdG6TgWSYRDrBfoghcNUuIJtntOI2mcfTIbWDjYmPWdSJk-1oyIHkPliPMhxpU" />
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent flex items-center p-md md:p-xl">
            <div class="max-w-md">
                <h1 class="font-display-lg text-white mb-sm">Trái cây nhiệt đới</h1>
                <p class="font-body-lg text-white/90 mb-md">Thưởng thức hương vị rực rỡ của thiên đường với bộ sưu tập trái cây nhiệt đới tươi sạch, được tuyển chọn kỹ lưỡng từ những nông trại hữu cơ hàng đầu.</p>
                <div class="flex gap-sm">
                    <span class="bg-primary text-white px-4 py-2 rounded-full font-label-md flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                        Organic Certified
                    </span>
                </div>
            </div>
        </div>
    </section>
    <div class="flex flex-col md:flex-row gap-gutter">
        <!-- Filter Sidebar -->
        <aside class="w-full md:w-64 flex-shrink-0 space-y-lg">
            <!-- Mobile Filter Toggle (Visible on Mobile) -->
            <button class="md:hidden flex items-center justify-between w-full p-4 bg-surface-container-lowest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] cursor-pointer hover:cursor-pointer">
                <span class="font-headline-sm">Bộ lọc</span>
                <span class="material-symbols-outlined">filter_list</span>
            </button>
            <!-- Filter Groups -->
            <div class="hidden md:block space-y-md">
                <!-- Category Filter -->
                <div class="bg-surface-container-lowest p-md rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <h3 class="font-headline-sm mb-md text-on-surface">Loại trái cây</h3>
                    <div class="space-y-sm">
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input checked="" class="rounded border-outline text-primary focus:ring-primary h-5 w-5" type="checkbox" />
                            <span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Tất cả nhiệt đới</span>
                        </label>
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input class="rounded border-outline text-primary focus:ring-primary h-5 w-5" type="checkbox" />
                            <span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Xoài Cát Hòa Lộc</span>
                        </label>
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input class="rounded border-outline text-primary focus:ring-primary h-5 w-5" type="checkbox" />
                            <span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Thanh long đỏ</span>
                        </label>
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input class="rounded border-outline text-primary focus:ring-primary h-5 w-5" type="checkbox" />
                            <span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Dứa mật</span>
                        </label>
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input class="rounded border-outline text-primary focus:ring-primary h-5 w-5" type="checkbox" />
                            <span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Bơ sáp</span>
                        </label>
                    </div>
                </div>
                <!-- Price Filter -->
                <div class="bg-surface-container-lowest p-md rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <h3 class="font-headline-sm mb-md text-on-surface">Giá (VNĐ)</h3>
                    <div class="px-2">
                        <input class="w-full accent-primary" max="500000" min="0" type="range" />
                        <div class="flex justify-between mt-sm text-on-surface-variant font-label-sm">
                            <span>0đ</span>
                            <span>500k+</span>
                        </div>
                    </div>
                </div>
                <!-- Freshness Badge -->
                <div class="bg-surface-container-lowest p-md rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <h3 class="font-headline-sm mb-md text-on-surface">Độ tươi mới</h3>
                    <div class="space-y-sm">
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input checked="" class="border-outline text-primary focus:ring-primary h-5 w-5" name="freshness" type="radio" />
                            <span class="font-body-md text-on-surface-variant">Trong ngày (Today)</span>
                        </label>
                        <label class="flex items-center gap-sm cursor-pointer group">
                            <input class="border-outline text-primary focus:ring-primary h-5 w-5" name="freshness" type="radio" />
                            <span class="font-body-md text-on-surface-variant">24h qua</span>
                        </label>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Product Grid Area -->
        <div class="flex-grow">
            <!-- Toolbar -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-md gap-sm">
                <p class="font-body-md text-on-surface-variant">Hiển thị <span class="font-bold text-primary">12</span> trên <span class="font-bold">48</span> sản phẩm</p>
                <div class="flex items-center gap-md">
                    <span class="font-label-md text-on-surface-variant">Sắp xếp:</span>
                    <select class="bg-surface-container-low border-none rounded-full px-md py-2 font-label-md text-on-surface focus:ring-primary">
                        <option>Mới nhất</option>
                        <option>Giá thấp đến cao</option>
                        <option>Giá cao đến thấp</option>
                        <option>Phổ biến nhất</option>
                    </select>
                </div>
            </div>
            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
                <!-- Product Card 1 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Dứa mật organic" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A close-up photograph of a perfectly ripe, golden pineapple with its textured, geometric skin, sitting against a soft, neutral-toned background. The lighting is crisp and detailed, highlighting the golden hues of the fruit and the sharp green of its crown. The image conveys a sense of premium quality and natural sweetness, styled with the professional, minimalist look of high-end organic groceries." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUfIEeMTocIpz5eMU_asZnR12hLSt6mBlWo5OFOX5jIjdvWXO2T5KbLxUlV5sAGRYkXK0dl1Gy_hQ8r-hIIz9mKy_dxyeYDC0PVa690_XbDc2wbqHoMdTYCY2rQuB52KME8LHD1glL6ePmwAPhsu8yeDCOImhInQGhraM3sv3OR_7OPAQltd4PrC6R51YbdvXFxnxs1gCrphZV_sMKsfCMC9HSGhqKaC9p_ZxXWKhf2hmnapo1IJirZGAa9JQg_7BuJEMUIl45ezY" />
                        <div class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Mới về</div>
                        <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-md">
                            <span class="material-symbols-outlined text-primary text-[20px]" style="font-variation-settings: 'FILL' 1;">eco</span>
                        </div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Dứa Mật Organic MD2</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Vị ngọt thanh, mọng nước, giàu Vitamin C từ vùng cao nguyên.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-headline-md text-primary">85.000đ</span>
                                <span class="font-label-sm text-on-surface-variant block">/ 1 Trái (~1.2kg)</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Xoài Cát Hòa Lộc" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A collection of smooth, yellow, sun-ripened mangoes arranged beautifully on a rustic wooden platter. The lighting is warm and directional, accentuating the elegant curves of the fruit and their rich, saturated yellow color. One mango is sliced to reveal the fibrous, juicy flesh inside. The scene is clean, airy, and professional, embodying the vibrant organic vitality of the FreshHarvest brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8QJwRaPXC2nvraeU1BaFsNNqiNCcGWDumVk9N4e9tiHu0jXm9v5ojh8q_pZTtZmc3i7RVkLD9OpOb5lifsT408RmuHv4U7Y7C8iZBU1R283IlVEQk0j3LCQthqkwoRPSCZH9_XXq5r4-MvZV3FRwVwidQaG6n-fVKbPdarMdumc3rVnTaD0NfASKptRP_Ps8U3oFltXcDvRtFRGDivptAJPvbpJc0HvP9hBynD-yBys4fRIdeTeskdqWiEJeE6lCoMgzX1zU01mg" />
                        <div class="absolute top-4 left-4 bg-secondary text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Bán chạy</div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Xoài Cát Hòa Lộc Loại I</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Thơm lừng, thịt dẻo, vị ngọt đậm đà danh tiếng Nam Bộ.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-headline-md text-primary">120.000đ</span>
                                <span class="font-label-sm text-on-surface-variant block">/ Kg</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Thanh Long Ruột Đỏ" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Sliced dragon fruit with vibrant pink skin and deep fuchsia flesh speckled with tiny black seeds. The fruit is presented on a minimalist ceramic plate under bright, clinical yet soft studio lighting. The high saturation of the fruit's color contrasts beautifully with the white space, creating a visual that feels energetic and healthy. This image follows the modern minimalist aesthetic of a high-end health product gallery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPy5jqxnIxhBYaCLiuClt7i66kw9gLTj2Kd_2VR4jMvCSMsfribC0prE0wMjuJx4QzmOYxUqGzn4j0rpI_0AlSg25t1tQ1VCLfnEQfGw-KOAPknJd-krAQndjkRIk117dYOYIKixkelNu5dkjfq5CYA9HKrFiexNKv--KaocAbjrSzIQyUVj8yItRUvW38J6htY1toFcUjDGFxnDy5ajAmSuQQ0AxnrIo4cviPb3hrclC-v4kLukAtduyv7D5EYd0jXojFkgmdQB0" />
                        <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-md">
                            <span class="material-symbols-outlined text-primary text-[20px]" style="font-variation-settings: 'FILL' 1;">leaf_spark</span>
                        </div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Thanh Long Ruột Đỏ</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Vị ngọt thanh dịu, giàu chất chống oxy hóa tự nhiên.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-headline-md text-primary">55.000đ</span>
                                <span class="font-label-sm text-on-surface-variant block">/ Kg</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Repeat for 6 items total -->
                <!-- Product Card 4 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Bơ Sáp Đăk Lăk" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Close up of a halved avocado showing a large, smooth pit and creamy yellow-green flesh. The avocado has dark, bumpy skin and is set on a light gray, textured surface that evokes a clean, unprocessed quality. The lighting is diffused, giving the image a soft-tactile feel. The overall composition is spacious and clean, prioritizing the natural purity and high-quality texture of the organic produce." src="https://lh3.googleusercontent.com/aida-public/AB6AXuASoTZvyhsaUZO3IKNvgNUlmqfgXKuaMHMRiFJ5TJM8sfq7PCN4EroFlL_8qMBonTWgtQ163xxiPO3za3hUlS4l0wriHjxiSET4HZfNtP4H4C7V6K5XCRIq4vKhaS4jF_XIi31QcOoot_eZ04qU76xr9HollCY1vtaQlmQB0r1FLj7zJ8uTRe65lbxSaS_S2RYZajj7ZbMVD1VAnLdDo8xaGMzVeBq3sXmyJ8JX0mc6IytUvyPmSM7iEvIHyyaCsyAC3pGuhiM82Mw" />
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Bơ Sáp Đăk Lăk</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Cơm vàng dẻo, béo ngậy, hạt nhỏ, không xơ từ Tây Nguyên.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-headline-md text-primary">95.000đ</span>
                                <span class="font-label-sm text-on-surface-variant block">/ Kg</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Đu đủ Organic" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A sliced papaya on a white background, displaying its bright orange flesh and shiny black seeds. The image is high-fidelity and captured with a macro lens to emphasize the freshness and succulent nature of the fruit. The lighting is bright and even, reinforcing the brand's pillar of purity and clean, unprocessed quality. The aesthetic is contemporary and gallery-like, focusing entirely on the product's natural vibrancy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiYf6ePfahQB7duSNB-_DQAeZUrPpThjTfNgTT-PwXpFa_r25WJJjgxppxrNobxd6POybDhbK2hDKd2_5naKD2X2SsdOm-Z4jcEHP_5LZX0fxpXQw4Wllu7h56QlysrypziP7k6IRv_GH14hv6Y3K8Kg_6xdTcFEgRijM_CD265LIq9j7tCOHPoCbBBz-SF3rTz8FdJfLXIoDWIni_DlnhS2ShRHZWN-ssTgLH6JqPTrzz0eJKGiRh_DkrrzKznbxk7XNt1Vfi7vg" />
                        <div class="absolute top-4 left-4 bg-tertiary text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">Giảm 15%</div>
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Đu Đủ Ruột Gấc</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Ngọt lịm, giàu Beta-carotene, tốt cho mắt và tiêu hóa.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <div class="flex items-center gap-sm">
                                    <span class="font-headline-md text-primary">42.000đ</span>
                                    <span class="text-on-surface-variant line-through text-[14px]">50.000đ</span>
                                </div>
                                <span class="font-label-sm text-on-surface-variant block">/ Kg</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 6 -->
                <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300 transform hover:scale-[1.02]">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img alt="Chuối Ngự Organic" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A bunch of small, premium yellow bananas, known as royal bananas, neatly arranged on a clean wooden table. The lighting is soft and bright, highlighting the flawless skins of the organic produce. The setting is domestic and approachable, yet sophisticated. The image captures the peak ripeness and vibrant lushness that defines the FreshHarvest shopping experience, utilizing high-fidelity photography as the main decorative element." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaHn7ByF5zmzuYvKz9Bl2-B--4u13Jj0WW3DC0NDKb8F10DPqEgScYC9qqKfofgxDElbrD_CKAU1KqkuX_nITYOW5UL6Z7EBhYGO_zO0dW6wrfbs5hU19lVKC9xsZoh3yE5begVQEzfrA_gkrYzm4ioqLSVSfQHoDhNfSx9E8OZl4BKT2iSsJE_CTa1CaG-0yJ65Y3UdHVlThD4A3-U82IZ3eNnYApMuynMQO4LCw3CWYbmU6iHWO9pdxshPcIf1KtBnHWLc0jGTo" />
                    </div>
                    <div class="p-md">
                        <h3 class="font-headline-sm text-on-surface mb-xs">Chuối Ngự Organic</h3>
                        <p class="font-body-md text-on-surface-variant mb-md">Chuối nhỏ, vỏ mỏng, mùi thơm nồng nàn, vị ngọt thanh.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="font-headline-md text-primary">35.000đ</span>
                                <span class="font-label-sm text-on-surface-variant block">/ Nải (~1kg)</span>
                            </div>
                            <button class="w-12 h-12 bg-primary text-white rounded-xl flex items-center justify-center hover:bg-primary-container transition-colors shadow-md cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <nav class="flex items-center justify-center gap-sm mt-xl pb-lg">
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low text-on-surface-variant transition-all cursor-pointer hover:cursor-pointer">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white font-bold shadow-md cursor-pointer hover:cursor-pointer">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low text-on-surface-variant transition-all font-bold cursor-pointer hover:cursor-pointer">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low text-on-surface-variant transition-all font-bold cursor-pointer hover:cursor-pointer">3</button>
                <span class="text-on-surface-variant">...</span>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low text-on-surface-variant transition-all font-bold cursor-pointer hover:cursor-pointer">8</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low text-on-surface-variant transition-all cursor-pointer hover:cursor-pointer">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </nav>
        </div>
    </div>
</main>
