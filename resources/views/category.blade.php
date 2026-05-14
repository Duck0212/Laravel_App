@extends('layouts.master')

@section('title', $category->name)

@section('content')
<main class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop py-base">
    <section class="relative w-full h-[300px] md:h-[360px] rounded-xl overflow-hidden mb-lg">
        <img alt="Category banner" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1600&q=80" />
        <div class="absolute inset-0 bg-black/50 flex items-center p-md md:p-xl">
            <div class="max-w-2xl">
                <span class="inline-block bg-primary text-white px-4 py-2 rounded-full font-label-md mb-sm">Danh mục</span>
                <h1 class="font-display-lg text-white mb-sm">{{ $category->name }}</h1>
                <p class="font-body-lg text-white/90">{{ $category->desc ?? 'Khám phá các sản phẩm tươi ngon thuộc danh mục này.' }}</p>
            </div>
        </div>
    </section>

    <div class="flex flex-col gap-gutter">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-lg">
            <div>
                <p class="font-label-sm text-on-surface-variant">Danh mục hiện tại</p>
                <h2 class="font-headline-md text-on-surface">{{ $category->name }}</h2>
            </div>
            <div class="text-on-surface-variant">
                {{ $products->total() }} sản phẩm
            </div>
        </div>

        @if($products->isEmpty())
        <div class="bg-surface p-lg rounded-xl text-center text-on-surface-variant shadow-sm">
            Không có sản phẩm nào trong danh mục này.
        </div>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
            @foreach($products as $product)
            <div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-[0px_10px_30px_rgba(0,0,0,0.08)] transition-all duration-300">
                <div class="relative aspect-[4/5] overflow-hidden">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/400x500?text=No+Image' }}" alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="p-md">
                    <a href="{{ route('product.detail', $product->id) }}" class="block text-lg font-semibold text-on-surface mb-2 hover:text-primary">{{ $product->name }}</a>
                    <p class="font-body-md text-on-surface-variant mb-4">{{ \Illuminate\Support\Str::limit($product->desc, 80) }}</p>
                    <div class="flex items-center justify-between gap-4">
                        <span class="font-headline-md text-primary">{{ number_format($product->price, 0, ',', '.') }} ₫</span>
                        <a href="{{ route('product.detail', $product->id) }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl text-sm font-semibold hover:bg-emerald-600 transition-colors">
                            Xem chi tiết
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-lg">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</main>
@endsection