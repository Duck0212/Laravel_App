@extends('admin.layout.app')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Tổng người dùng</p>
                    <h3>{{ $totalUsers }}</h3>
                </div>
                <i class="fas fa-users" style="font-size: 28px; color: #3b82f6;"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card success">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Tổng sản phẩm</p>
                    <h3>{{ $totalProducts }}</h3>
                </div>
                <i class="fas fa-box" style="font-size: 28px; color: #10b981;"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card warning">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Danh mục</p>
                    <h3>{{ $totalCategories }}</h3>
                </div>
                <i class="fas fa-list" style="font-size: 28px; color: #f59e0b;"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card info">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Tổng đơn hàng</p>
                    <h3>{{ $totalOrders }}</h3>
                </div>
                <i class="fas fa-shopping-cart" style="font-size: 28px; color: #3b82f6;"></i>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <p>Tổng doanh thu</p>
                    <h3>{{ number_format($totalRevenue, 0, ',', '.') }} ₫</h3>
                </div>
                <i class="fas fa-dollar-sign" style="font-size: 28px; color: #10b981;"></i>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-list"></i> Các đơn hàng gần đây
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
                            @forelse ($recentOrders as $order)
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
                                    <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i> Xem
                                    </a>
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
            </div>
        </div>
    </div>
</div>
@endsection