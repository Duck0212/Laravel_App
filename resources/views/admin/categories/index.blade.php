@extends('admin.layout.app')

@section('title', 'Quản lý danh mục')
@section('page_title', 'Danh sách danh mục')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h1 class="page-title"><i class="fas fa-list"></i> Danh mục</h1>
    </div>
    <div class="col-md-6 text-end">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm danh mục mới
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fas fa-list"></i> Danh sách danh mục
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Số sản phẩm</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td><strong>#{{ $category->id }}</strong></td>
                        <td>{{ $category->name }}</td>
                        <td>{{ Str::limit($category->desc, 50) ?? 'Không có mô tả' }}</td>
                        <td>
                            <span class="badge bg-info">{{ $category->products()->count() }}</span>
                        </td>
                        <td>{{ $category->created_at->format('d/m/Y') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-sm btn-info" title="Xem">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning" title="Sửa">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">Không có danh mục nào</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $categories->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection