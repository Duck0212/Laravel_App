@extends('layouts.master')

@section('title', 'Cart')

@section('content')
<main class="max-w-[1280px] mx-auto px-5 md:px-16 pb-8 mt-20 border border-outline-variant/30 rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
    <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-lg pt-8">Giỏ hàng của bạn</h1>

    @if(session('success'))
    <div class="mb-lg rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-900">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        <div class="lg:col-span-8 space-y-md">
            @if($cartProducts->isEmpty())
            <div class="bg-white p-10 rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] text-center">
                <h2 class="font-headline-md text-headline-md mb-4">Không có sản phẩm nào trong giỏ hàng</h2>
                <p class="text-on-surface-variant mb-6">Hãy thêm sản phẩm từ trang chủ hoặc chi tiết sản phẩm để tiếp tục.</p>
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-3 text-white font-bold hover:opacity-90 transition-all">Tiếp tục mua sắm</a>
            </div>
            @else
            @foreach($cartProducts as $item)
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-[0px_4px_20px_rgba(0,0,0,0.04)] flex flex-col gap-6 lg:flex-row items-start lg:items-center">
                <div class="w-full lg:w-32 h-32 rounded-3xl overflow-hidden bg-white flex-shrink-0">
                    <img alt="{{ $item->name }}" class="w-full h-full object-cover" src="{{ $item->img }}" />
                </div>
                <div class="flex-grow grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                    <div class="flex flex-col justify-center gap-2">
                        <span class="font-label-sm uppercase tracking-widest text-secondary">Sản phẩm</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">{{ $item->name }}</h3>
                        <p class="font-body-md text-on-surface-variant">Giá: {{ number_format($item->price) }} VND</p>
                    </div>
                    <div class="flex flex-col justify-between gap-4 items-start md:items-end">
                        <form action="{{ route('cart.update') }}" method="POST" class="flex items-center gap-3 bg-white rounded-full border border-outline px-3 py-2">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->id }}" />
                            <button type="button" onclick="this.closest('form').querySelector('[name=quantity]').stepDown();" class="material-symbols-outlined text-2xl cursor-pointer hover:cursor-pointer">remove</button>
                            <input
                                type="number"
                                name="quantity"
                                value="{{ $item->quantity }}"
                                min="1"
                                class="w-16 text-center border-none bg-transparent font-bold focus:outline-none" />
                            <button type="button" onclick="this.closest('form').querySelector('[name=quantity]').stepUp();" class="material-symbols-outlined text-2xl cursor-pointer hover:cursor-pointer">add</button>
                            <button type="submit" class="rounded-full bg-primary px-4 py-2 text-white font-bold cursor-pointer hover:cursor-pointer">Cập nhật</button>
                        </form>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item->id }}" />
                            <button type="submit" class="text-error font-label-md hover:underline flex items-center gap-1 cursor-pointer hover:cursor-pointer">
                                <span class="material-symbols-outlined text-[18px]">delete</span> Xóa
                            </button>
                        </form>
                        <p class="text-primary text-lg">Tạm tính: {{ number_format($item->subtotal) }} VND</p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <aside class="lg:col-span-4">
            <div class="bg-surface-container-lowest rounded-xl p-6 shadow-[0px_4px_20px_rgba(0,0,0,0.04)] sticky top-28">
                <h2 class="font-headline-md text-headline-md mb-md">Tóm tắt đơn hàng</h2>
                <div class="space-y-4 mb-md">
                    <div class="flex justify-between font-body-md text-on-surface-variant">
                        <span>Tổng số sản phẩm</span>
                        <span class="text-on-surface font-semibold">{{ $cartProducts->sum('quantity') }}</span>
                    </div>
                    <div class="flex justify-between font-body-md text-on-surface-variant">
                        <span>Tổng giá</span>
                        <span class="text-on-surface font-semibold">{{ number_format($total) }} VND</span>
                    </div>
                    <div class="flex justify-between font-body-md text-on-surface-variant border-t border-outline-variant pt-4">
                        <span class="font-bold text-on-surface">Thành tiền</span>
                        <span class="font-bold text-primary text-headline-sm">{{ number_format($total) }} VND</span>
                    </div>
                </div>
                <div class="bg-surface-container-low p-4 rounded-lg mb-md">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">local_shipping</span>
                        <span class="font-label-md text-on-surface">Miễn phí giao hàng đơn từ 500.000đ</span>
                    </div>
                    <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                        <div class="bg-primary h-full"
                            style="width: {{ min(100, $total > 0 ? ($total / 500000) * 100 : 0) }}%"></div>
                    </div>
                    <p class="text-[12px] text-on-surface-variant mt-2">Thêm {{ number_format(max(0, 500000 - $total)) }}VND để được miễn phí ship.</p>
                </div>
                <a href="{{ route('checkout') }}" class="w-full inline-flex bg-primary text-white py-4 rounded-lg font-headline-sm hover:opacity-90 transition-all items-center justify-center gap-2 mb-md">
                    Tiến hành thanh toán
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3 text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary">verified_user</span>
                        <span class="text-label-md">Thanh toán an toàn SSL</span>
                    </div>
                    <div class="flex items-center gap-3 text-on-surface-variant">
                        <span class="material-symbols-outlined text-primary">eco</span>
                        <span class="text-label-md">Đóng gói thân thiện môi trường</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</main>