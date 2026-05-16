@extends('admin.layout.app')

@section('title', 'Chi tiết sản phẩm')
@section('page_title', 'Chi tiết sản phẩm')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-info-circle"></i> Chi tiết sản phẩm
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $product->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Hình ảnh:</strong>
                    </div>
                    <div class="col-md-8">
                        @if ($product->image_url)
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 200px;">
                        @else
                        <span class="text-muted">Không có hình ảnh</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Tên sản phẩm:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $product->name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Danh mục:</strong>
                    </div>
                    <div class="col-md-8">
                        @if ($product->category)
                        <span class="badge bg-secondary">{{ $product->category->name }}</span>
                        @else
                        <span class="badge bg-warning">Không có danh mục</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Giá:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="text-success fw-bold">{{ number_format($product->price, 0, ',', '.') }} ₫</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Mô tả:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $product->desc ?? 'Không có mô tả' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Ngày tạo:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $product->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Cập nhật lần cuối:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $product->updated_at->format('d/m/Y H:i') }}
                    </div>
                </div>

                <hr>

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Sửa
                    </a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection