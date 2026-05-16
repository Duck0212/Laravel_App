@extends('layouts.master')

@section('title', 'Home')

@section('content')
<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative w-full h-[600px] md:h-[720px] flex items-center overflow-hidden bg-gray-50">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-60" data-alt="Một bức ảnh góc rộng sống động và tươi tốt về một giỏ trái cây cao cấp đầy ắp dâu tây, cam và nho chín mọng. Bối cảnh được đặt trong một căn bếp hiện đại sáng sủa, ngập tràn ánh nắng với phong cách tối giản màu trắng. Ánh sáng dịu nhẹ buổi sáng tạo nên một bầu không khí trong lành, thoáng đãng, làm nổi bật kết cấu tự nhiên và màu sắc rực rỡ của các loại trái cây tươi. Tổng thể mang đến cảm giác tràn đầy sức sống và sự sang trọng hướng đến sức khỏe."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkgRuxp3m3eKwzzSxlMP6HyqjZoAcLfMYS8RCmUvDjOVrPajdAM8waUCI6cv-82N9S2GVA61IA4PogZvivYfnvY__mYpQWQ_lNoua6R9EIz43ybcroXJLed2C7HvL-JgDuPx4Z04mfkVWCeFcRe_u_rrO5dGeugA4r6jEKyDI-Ziq_KZ7nTX_Qr54BJ2GFZhLL8HI-sj0-t7xUFxoA5DuR0QlBBXK3JAuvfSI0NheH8yarkDIqygZHfQx3btyb6DH0q5V-TZMjKlo" />
            <div class="absolute inset-0 bg-gradient-to-r from-surface-container-lowest/80 via-surface-container-lowest/40 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full px-4 md:px-8 max-w-[1280px] mx-auto">
            <div class="max-w-2xl">
                <h1 class="font-bold text-5xl md:text-6xl text-gray-900 mb-8 leading-tight">
                    Sức sống hữu cơ <br /> được giao đến tận cửa nhà bạn
                </h1>
                <p class="font-body-lg text-lg text-gray-900 mb-12 max-w-lg">
                    Trải nghiệm độ chín hoàn hảo với các loại trái cây hữu cơ được chọn lọc thủ công từ nông trại. Chất lượng tinh khiết, không thỏa hiệp.
                </p>
                <div class="flex flex-wrap gap-6">
                    <button class="border-2 bg-primary text-on-primary px-8 py-4 rounded-lg font-label-md cursor-pointer hover:shadow-lg transition-all scale-102 hover:scale-105">
                        Mua sắm Bộ sưu tập theo mùa
                    </button>
                    <button class="border-2 border-primary text-gray-900 px-8 py-4 rounded-lg font-label-md cursor-pointer hover:shadow-lg transition-all scale-102 hover:scale-105">
                        Xem Các Trái Cây
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Section -->
    <section class="py-24 w-full px-4 md:px-8 max-w-[1280px] mx-auto">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="font-bold text-3xl text-gray-900 mb-2">Trái cây đang thịnh hành</h2>
                <p class="font-body-md text-gray-600">Những lựa chọn chất lượng nhất trong tuần.</p>
            </div>
            <a class="text-gray-900 font-label-md flex items-center hover:shadow-lg transition-all scale-102 hover:scale-105" href="#">
                Xem tất cả<span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($products as $product)
            <div class="group bg-gray-50 rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] overflow-hidden transition-transform duration-200 hover:scale-[1.02] hover:shadow-md">
                <a href="{{ route('product.detail', $product->id) }}">
                    <div class="relative aspect-[4/5] overflow-hidden">
                        <img class="w-full h-full object-cover" data-alt="Ảnh chụp cận cảnh (macro) những quả dâu tây hữu cơ tươi ngon, phủ đầy sương, trong một chiếc bát sứ trắng tinh. Ánh sáng mạnh và sáng, làm nổi bật màu đỏ tươi rực rỡ và những hạt nhỏ li ti của quả. Hình ảnh mang phong cách tối giản, sang trọng, thể hiện chất lượng cao cấp và độ tươi ngon của sản phẩm."
                            src="{{ $product->image_url }}" />
                    </div>
                </a>
                <div class="p-4 flex flex-col gap-2">
                    <h3 class="font-headline-sm text-xl text-gray-900">{{ $product->name }}</h3>
                    <div class="flex justify-between items-center mt-2 gap-3">
                        <span class="text-gray-900 font-bold text-xl">{{ number_format($product->price) }} VND</span>
                        <form action="{{ route('cart.add') }}" method="POST" class="m-0">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                            <input type="hidden" name="quantity" value="1" />
                            <button type="submit" class="bg-primary text-white p-2 rounded-lg hover:bg-primary-container transition-colors cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined">add</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Popular Categories - Bento Style -->
    <section class="py-24 bg-gray-50">
        <div class="w-full px-4 md:px-8 max-w-[1280px] mx-auto">
            <div class="mb-12 text-center">
                <h2 class="font-bold text-3xl text-gray-900">Khám phá khu vườn của chúng tôi</h2>
                <p class="font-body-md text-gray-600">Mua sắm theo danh mục sản phẩm thu hoạch sáng nay.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-2 gap-6 h-auto md:h-[600px]">
                <!-- Large Category -->
                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-xl bg-primary shadow-sm cursor-pointer">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80" data-alt="Một góc nhìn từ trên cao rộng lớn, đầy tính nghệ thuật, cho thấy nhiều loại trái cây họ cam quýt khác nhau, bao gồm cam đỏ, chanh và bưởi được thái lát và sắp xếp trên một mặt bàn đá cẩm thạch. Ánh sáng tươi sáng và rực rỡ, làm nổi bật màu sắc sống động và kết cấu mọng nước của chúng. Bố cục hiện đại và nghệ thuật, tạo nên cảm giác về sức sống tự nhiên dồi dào."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmuYxoeNfyfu6GYjPb1i4Paevy4J1yQq_VuggWlJhjpImfDwl1NCzZjkY0vk9eTQxDywmjMqXEOt9TJeUDr8gXzbqc3zRrkIG4qxqNjOyV_YiihBoQDMXs1_y98rq52TyWOY__ysMhIOqmZFo2lHxwfTv2sAMSMfDOg3w05Bma_MOfqpeQrZbr-20ux6yOw6E3Yhdiodd-AAfd7drcI0V6Cy8gJdfahi8OJlmEzEdSomGMyQZBpovaWBbgFVD0w3Z7GnRW9YEvVgI" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-lg left-lg text-white">
                        <span class="text-sm font-medium uppercase tracking-widest mb-2 block">Lựa chọn cao cấp</span>
                        <h3 class="text-5xl md:text-3xl font-bold mb-4">Cam quýt &amp; Quả mọng</h3>
                        <button class="bg-white text-gray-900 px-6 py-2 rounded-full font-label-md transition-all hover:bg-primary-fixed cursor-pointer hover:cursor-pointer">Khám phá sản phẩm</button>
                    </div>
                </div>
                <!-- Medium Category 1 -->
                <div class="relative group overflow-hidden rounded-xl bg-secondary shadow-sm cursor-pointer h-64 md:h-full">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80" data-alt="Một cái nhìn tập trung cận cảnh về quả thanh long và quả kiwi được cắt nửa, đặt trên một chiếc đĩa gốm tối giản. Các màu sắc rất rực rỡ, với độ tương phản cao giữa lớp vỏ hồng và phần thịt trắng có hạt đen. Ánh sáng sắc nét và hiện đại, nhấn mạnh vẻ đẹp kiến trúc độc đáo của các loại trái cây nhiệt đới."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjTqHlkpCUv5U7LQhkaWYerQ9rLhU57ZY1vRjSdJSZQFCOI4kkc8by5r008iq2Lhllcxwoh2vkEocwyjfT6eXTfV29o7GZLyazwbje7VE6iLPTt5lf2LfiwuM682-6WoAuUueZ0AYAdR2wSEhkj0wqL7zNC3jWuQNgw4tKpKdf1ovXW8BaFgjFAbQ8RRhtS9J7_7Zqa7ZYJBeuxjMAAAeTcH2noHmsR7NEap8TbJyon-a-IOILW5sLBV7snBxU7v1Ez68wvUxfJyE" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-md left-md text-white">
                        <h3 class="text-xl font-bold mb-2">Trái cây nhiệt đới</h3>
                        <p class="text-xs opacity-90">Những loại hiếm có từ khắp trên thế giới</p>
                    </div>
                </div>
                <!-- Medium Category 2 -->
                <div class="relative group overflow-hidden rounded-xl bg-tertiary shadow-sm cursor-pointer h-64 md:h-full">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80" data-alt="Một sự kết hợp các hộp trái cây được đóng gói gọn gàng, featuring apples, pears, and nuts. Các hộp được làm từ giấy tái chế bền vững, được sắp xếp theo một mẫu mã sạch sẽ và có tổ chức. Ánh sáng mềm mại và tự nhiên, nhấn mạnh khái niệm về dinh dưỡng hữu cơ toàn diện, sẵn sàng để ăn, được giao hàng với sự chăm sóc."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMJCznNg3U_ldE-LIPL5aNFeK8rTI534jlWCXTALI3iIMWJFuIMfbOko-UG222qkq46xZlNz5tgK_FxkHlVWZYfSMdyTVA8LB4OsQ8o892dIpSuzHYMOud-7gQRxc4HrPcG51gdP36f9djnOsRL12wMkzrZPAEXa7lveVFQX_2SKb-gBXB_aq3hJs19tav_ptqDCdoYO95HzxATC1rdPnU-BtDhqUX-Bzt980gfAtF2yVg9vLOHWsM7-5nZ357OcGLqjPDeqbcQr8" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-md left-md text-white">
                        <h3 class="text-xl font-bold mb-2">Hộp trái cây được chọn lọc</h3>
                        <p class="text-xs opacity-90">Hoàn hảo cho gia đình &amp; quà tặng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section -->
    <section class="py-24 w-full px-4 md:px-8 max-w-[1280px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
            <div class="order-2 md:order-1">
                <img class="rounded-2xl shadow-lg aspect-[4/3] object-cover" data-alt="Một khung hình điện ảnh, ánh sáng mặt trời rực rỡ của một trang trại hữu cơ vào bình minh. Dãy cây trái cây khỏe mạnh kéo dài về phía chân trời dưới bầu trời vàng óng ánh. Một nông dân được nhìn thấy ở xa, chăm sóc cây trồng. Ánh sáng ấm áp và gợi cảm, tạo nên cảm giác sâu sắc về sự kết nối với thiên nhiên và nguồn gốc của thực phẩm hữu cơ chất lượng cao."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMTmaCm2vU0VpPyKWYLDrtVKFSFbr1mDO7cnPlcIlBKNzPHtu2VyFj6ofTJvkWvZroR07Pc2hgQ7tEhnK1MVi9O9THEXAsOCgjjycxAjh2pqGaF6XiAN_xhV0RUa0ryN6lU15nzX5yJK_EN5xZQUcIVnmLINyEzogsKIJWOcNvFp1dsunvawXuKoENhNFEZj_LtE6PsFe3krpztRBNAgCMcO9Ds65RcaWP6Dn6nGeUGA-IlzB3f0cslqgPWOxfiCjsOfUbZGWLV30" />
            </div>
            <div class="order-1 md:order-2">
                <span class="text-green-700 font-label-md uppercase tracking-widest mb-2 block">Triết lý của chúng tôi</span>
                <h2 class="font-bold text-5xl md:text-6xl text-gray-900 mb-8">Trồng bằng tình yêu, Giao bằng sự trung thực</h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="bg-primary-fixed p-3 rounded-full h-fit">
                            <span class="material-symbols-outlined text-gray-900">eco</span>
                        </div>
                        <div>
                            <h4 class="font-headline-sm text-gray-900 mb-1">100% Hữu cơ được chứng nhận</h4>
                            <p class="font-body-md text-gray-600">Chúng tôi chỉ hợp tác với các trang trại đáp ứng các tiêu chuẩn hữu cơ nghiêm ngặt nhất, đảm bảo không có thuốc trừ sâu nào tiếp xúc với trái cây của bạn.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-primary-fixed p-3 rounded-full h-fit">
                            <span class="material-symbols-outlined text-gray-900">schedule</span>
                        </div>
                        <div>
                            <h4 class="font-headline-sm text-gray-900 mb-1">Thu hoạch đến cửa hàng trong 24 giờ</h4>
                            <p class="font-body-md text-gray-600">Chuỗi cung ứng nhanh chóng của chúng tôi có nghĩa là trái cây của bạn dành ít thời gian hơn trong xe tải và nhiều thời gian hơn để chín tự nhiên dưới ánh nắng mặt trời.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-primary-fixed p-3 rounded-full h-fit">
                            <span class="material-symbols-outlined text-gray-900">view_object_track</span>
                        </div>
                        <div>
                            <h4 class="font-headline-sm text-gray-900 mb-1">Tính minh bạch toàn diện của trang trại</h4>
                            <p class="font-body-md text-gray-600">Quét mã QR trên bất kỳ hộp nào để xem chính xác khu vực nơi trái cây của bạn được trồng và gặp nông dân đã thu hoạch nó.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="py-24 bg-gray-100">
        <div class="w-full px-4 md:px-8 max-w-[1280px] mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-bold text-3xl text-gray-900">Yêu thích bởi những người yêu sức khỏe</h2>
                <p class="font-body-md text-gray-600">Những câu chuyện thực tế từ cộng đồng yêu trái cây tươi của chúng tôi.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <div class="flex text-green-700 mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="font-body-md italic text-gray-900 mb-6">"Chất lượng thực sự khác biệt so với trái cây ở siêu thị. Những quả Sữa Mít thực sự có vị như mật ong. Nó là một bước đổi mới cho các món smoothie sáng của tôi."</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Một bức ảnh chụp chuyên nghiệp và ấm áp của một người phụ nữ ở độ tuổi 30 trở lên với vẻ ngoài thân thiện và khỏe mạnh. Cô ấy đang mỉm cười tự nhiên trước máy quay. Phông nền là một gam màu trung tính mềm mại, tạo nên phong cách hiện đại và đáng tin cậy, thể hiện sự hài lòng của khách hàng." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCk2TAArR9a2HHkgX8bJScvTDDfELilM0t0xWjq4YZamXWpXy5tXdEl1-JaggHuN_06S0SKKjDtJlH4K43apr9_y4I2YamjZPEm-LJ_JEX001Mk9AGMLUfJ823dAY3V16p7C2zUiD6T2C-NzPafIRWRrSCYISAMzB4ks5F8CkB0wBoMOF8RhvO4PWP33Y_m6ESXZGInVX2JRv7OQn_y6gkcOTBIL7_ZxetGZaW5wwHNTlOqnd_3XEZNZ9Sik-_PE1ezRhng47FKWk4" />
                        <div>
                            <p class="font-label-md text-gray-900">Elena S.</p>
                            <p class="text-xs text-gray-600">Nutrition Coach</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <div class="flex text-green-700 mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="font-body-md italic text-gray-900 mb-6">"Chúng tôi đã nhận được Seasonal Box trong ba tháng qua. Mỗi lần giao hàng đều là một bất ngờ về màu sắc và hương vị. Các bé thực sự yêu cầu ăn trái cây làm món ăn vặt bây giờ!"</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Một bức ảnh chụp gọn gàng và tối giản của một người đàn ông ở độ tuổi 40 đầu với nụ cười thân thiện, dễ gần. Anh ta có vẻ ngoài hiện đại, khỏe mạnh và được đặt trước phông nền sáng, thoáng đãng. Hình ảnh truyền tải cảm giác đáng tin cậy và sự hài lòng chân thật, phù hợp cho một đánh giá khách hàng hiện đại." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJAawVWoCb82vrpHeBlz-ENsJ3b6dVVAuNxwNX1ps6LmxpttpAyIx2Y19kBK_m_XzHh-U2KIFy-BcYVkFmTtDqk3UeJiStAU8JdpK6T3N_PBU6aV26gMhHjg7DSEzBe1hZXjSHa6eoTb1xM-AErm1ulUMeoazo24KYavirebKqOfVTQ20G1O13YhZVyG3jKj25DLNgTTtob8JyPjqp1MbkckiEb8BHG4RnQUDj6UbrzUXAGTj5IapUS4W8IJNs5GaVSWA3rEQ3MJc" />
                        <div>
                            <p class="font-label-md text-gray-900">Mark J.</p>
                            <p class="text-xs text-gray-600">Cha của Ba Người</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                    <div class="flex text-green-700 mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="font-body-md italic text-gray-900 mb-6">"FreshHarvest không chỉ là về trái cây; đó là về tính minh bạch. Tôi yêu thích việc biết chính xác trang trại nào cung cấp những quả Dâu Tây Hoàng gia của tôi. Tôi rất khuyến nghị!"</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Một bức ảnh chụp cao cấp, tối giản của một người phụ nữ trẻ với biểu cảm sôi nổi và hào hứng. Ánh sáng dịu nhẹ và đều, làm nổi bật làn da trong trẻo và vẻ ngoài khỏe mạnh. Phông nền trắng tối giản duy trì một phong cách cao cấp, tươi mới, phù hợp với giá trị hữu cơ và sống động của thương hiệu." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCopzrBqEIw_O6cTOI-NrgeofOpBSFz4-VUCH9uXB0fvslqd-TWWMdafJwpS70w3wEgYSIo4_i2wCWeqj_-8loteHMEryzAFUz9elRP1InhfGlbi8WCFAljb3iC6njUemxpjTi_-AO5mrlvI_GysatCGRxBTFBJ0j8HPTYzWHouhv_ypBRVe-uxrwKIr8BbJ4EF29V5rdephiXdlhSApOrMaSnrDBlLtpcUC6x0PrFCUVc0hYXtcmE4tqYwPjhWLACYLRQNyIv5yaY" />
                        <div>
                            <p class="font-label-md text-gray-900">Sarah K.</p>
                            <p class="text-xs text-gray-600">Eco-Blogger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>