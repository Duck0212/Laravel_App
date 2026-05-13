@extends('layouts.master')

@section('title', 'Search')

@section('content')
<main class="pt-32 pb-xl px-margin-mobile md:px-margin-desktop max-w-[1280px] mx-auto min-h-screen">
    <!-- Search Section -->
    <section class="mb-lg">
        <div class="max-w-3xl mx-auto text-center mb-md">
            @if(isset($query) && $query)
            <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-base">Kết quả tìm kiếm cho: "{{ $query }}"</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">
                @if($products->total() > 0)
                Tìm thấy <span class="font-bold text-primary">{{ $products->total() }}</span> sản phẩm phù hợp
                @else
                Không tìm thấy sản phẩm nào phù hợp với từ khóa "{{ $query }}"
                @endif
            </p>
            @else
            <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-base">Tìm kiếm sản phẩm</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Khám phá những lựa chọn tươi ngon nhất được thu hoạch trực tiếp từ trang trại của chúng tôi.</p>
            @endif
        </div>
        <div class="max-w-2xl mx-auto relative group border border-outline-variant/30 rounded-full shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
            <form action="{{ route('search') }}" method="GET" class="relative">
                <div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline" data-icon="search">search</span>
                </div>
                <input name="q" class="w-full h-16 pl-14 pr-24 bg-surface-container-lowest border-none rounded-full shadow-[0px_4px_20px_rgba(0,0,0,0.04)] text-body-lg focus:ring-2 focus:ring-primary/20 transition-all duration-300 outline-none" placeholder="Tìm kiếm sản phẩm..." type="text" value="{{ $query ?? '' }}" />
                <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 bg-primary text-on-primary px-6 py-2.5 rounded-full font-label-md text-label-md hover:bg-primary-container transition-colors cursor-pointer hover:cursor-pointer">Tìm kiếm</button>
            </form>
        </div>
    </section>
    <!-- Filters & Results Status -->
    @if($products->total() > 0)
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-md gap-base border-b border-outline-variant pb-base">
        <p class="font-label-md text-label-md text-on-surface-variant">
            Hiển thị <span class="text-on-surface font-bold">{{ $products->count() }}</span> trong tổng số <span class="text-on-surface font-bold">{{ $products->total() }}</span> sản phẩm
            @if(isset($query) && $query)
            cho "<span class="text-primary font-bold">{{ $query }}</span>"
            @endif
        </p>
        <div class="flex items-center gap-base overflow-x-auto w-full md:w-auto pb-2 md:pb-0">
            <span class="text-label-sm font-label-sm text-outline uppercase tracking-wider whitespace-nowrap">Sắp xếp:</span>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'popular']) }}" class="flex items-center gap-xs px-4 py-1.5 rounded-full {{ ($sortBy ?? '') === 'popular' ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high' }} font-label-md text-label-md border border-primary/10 cursor-pointer hover:cursor-pointer transition-colors">
                Phổ biến nhất
            </a>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_low']) }}" class="flex items-center gap-xs px-4 py-1.5 rounded-full {{ ($sortBy ?? '') === 'price_low' ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high' }} font-label-md text-label-md border border-primary/10 cursor-pointer hover:cursor-pointer transition-colors">
                Giá thấp nhất
            </a>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_high']) }}" class="flex items-center gap-xs px-4 py-1.5 rounded-full {{ ($sortBy ?? '') === 'price_high' ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high' }} font-label-md text-label-md border border-primary/10 cursor-pointer hover:cursor-pointer transition-colors">
                Giá cao nhất
            </a>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}" class="flex items-center gap-xs px-4 py-1.5 rounded-full {{ ($sortBy ?? '') === 'newest' ? 'bg-primary-fixed text-on-primary-fixed' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high' }} font-label-md text-label-md border border-primary/10 cursor-pointer hover:cursor-pointer transition-colors">
                Mới nhất
            </a>
        </div>
    </div>
    @endif
    <!-- Product Grid -->
    @if($products->total() > 0)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-gutter">
        @foreach ($products as $product)
        <div class="bg-surface-container-lowest rounded-xl p-0 overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:scale-102 hover:shadow-md transition-all duration-300 group relative border border-outline-variant/30">
            <div class="aspect-[4/5] relative overflow-hidden">
                <img alt="{{ $product->name }}" class="w-full h-full object-cover" src="{{ $product->img }}" />
                <div class="absolute top-3 left-3 flex gap-1">
                    <div class="bg-primary/90 text-on-primary px-3 py-1 rounded-full text-[10px] font-bold flex items-center gap-1 shadow-sm">
                        <span class="material-symbols-outlined text-[14px]" data-icon="eco" data-weight="fill">eco</span> TƯƠI MỚI
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-1">{{ $product->name }}</h3>
                <p class="font-body-md text-label-sm text-on-surface-variant mb-3">
                    @if($product->category)
                    Nguồn: {{ $product->category->name ?? 'Trang trại' }}
                    @else
                    Nguồn: Trang trại
                    @endif
                </p>
                <div class="flex justify-between items-end">
                    <div class="text-primary font-bold text-headline-sm">{{ number_format($product->price, 0, ',', '.') }}<span class="text-on-surface-variant font-normal text-label-sm">/kg</span></div>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="inline">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="quantity" value="1" />
                        <button type="submit" class="bg-primary hover:bg-primary-container text-on-primary p-2 rounded-lg transition-colors cursor-pointer hover:cursor-pointer">
                            <span class="material-symbols-outlined" data-icon="add">add</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if($products->hasPages())
    <div class="mt-xl flex justify-center">
        {{ $products->appends(request()->query())->links() }}
    </div>
    @endif

    @else
    <!-- Empty State -->
    <div class="flex-col items-center justify-center py-xl text-center">
        <div class="w-24 h-24 bg-surface-container-low rounded-full flex items-center justify-center mb-md mx-auto">
            <span class="material-symbols-outlined text-outline text-[48px]" data-icon="search_off">search_off</span>
        </div>
        <h2 class="font-headline-md text-headline-md text-on-surface mb-base">
            @if(isset($query) && $query)
            Rất tiếc, không tìm thấy kết quả nào cho "{{ $query }}"
            @else
            Hãy bắt đầu tìm kiếm
            @endif
        </h2>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-sm mb-lg mx-auto">
            @if(isset($query) && $query)
            Hãy thử tìm kiếm với các từ khóa khác hoặc tham khảo các sản phẩm gợi ý bên dưới.
            @else
            Nhập tên sản phẩm bạn muốn tìm vào ô tìm kiếm ở trên.
            @endif
        </p>
        @if(isset($query) && $query)
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button onclick="document.querySelector('input[name=q]').value=''; document.querySelector('form').submit()" class="bg-surface-container-low text-on-surface-variant px-lg py-md rounded-full font-label-md text-label-md hover:bg-surface-container-high transition-all cursor-pointer hover:cursor-pointer">
                Xóa từ khóa
            </button>
            <a href="{{ route('home') }}" class="bg-primary text-on-primary px-lg py-md rounded-full font-label-md text-label-md hover:shadow-lg transition-all cursor-pointer hover:cursor-pointer">
                Quay lại Trang chủ
            </a>
        </div>
        @endif
    </div>
    @endif
</main>