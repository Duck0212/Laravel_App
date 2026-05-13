@extends('admin.layout.app')

@section('title', 'Chi tiết danh mục')
@section('page_title', 'Chi tiết danh mục')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-info-circle"></i> Chi tiết danh mục
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>ID:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $category->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Tên danh mục:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $category->name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Mô tả:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $category->desc ?? 'Không có mô tả' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Số sản phẩm:</strong>
                    </div>
                    <div class="col-md-8">
                        <span class="badge bg-info">{{ $category->products()->count() }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Ngày tạo:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $category->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <strong>Cập nhật lần cuối:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $category->updated_at->format('d/m/Y H:i') }}
                    </div>
                </div>

                <hr>

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Sửa
                    </a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
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