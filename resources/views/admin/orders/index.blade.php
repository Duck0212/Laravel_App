@extends('admin.layout.app')

@section('title', 'Quản lý đơn hàng')
@section('page_title', 'Danh sách đơn hàng')

@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h1 class="page-title"><i class="fas fa-shopping-cart"></i> Đơn hàng</h1>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <i class="fas fa-list"></i> Danh sách đơn hàng
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                        <td><strong>#{{ $order->id }}</strong></td>
                        <td>{{ $order->user->name }}</td>
                        <td><strong>{{ number_format($order->total_price, 0, ',', '.') }} ₫</strong></td>
                        <td>
                            @if ($order->status === 'pending')
                            <span class="badge bg-warning">Chờ xử lý</span>
                            @elseif ($order->status === 'processing')
                            <span class="badge bg-info">Đang xử lý</span>
                            @elseif ($order->status === 'completed')
                            <span class="badge bg-success">Hoàn thành</span>
                            @else
                            <span class="badge bg-danger">Đã hủy</span>
                            @endif
                        </td>
                        <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-info" title="Xem">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
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
                        <td colspan="6" class="text-center text-muted py-4">Không có đơn hàng nào</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection