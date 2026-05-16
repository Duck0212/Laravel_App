@extends('admin.layout.app')

@section('title', 'Chi tiết đơn hàng')
@section('page_title', 'Chi tiết đơn hàng')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-info-circle"></i> Chi tiết đơn hàng #{{ $order->id }}
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>Thông tin khách hàng</h5>
                        <div class="row mb-2">
                            <div class="col-md-5">
                                <strong>Tên:</strong>
                            </div>
                            <div class="col-md-7">
                                {{ $order->user->name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-5">
                                <strong>Email:</strong>
                            </div>
                            <div class="col-md-7">
                                {{ $order->user->email }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5>Thông tin đơn hàng</h5>
                        <div class="row mb-2">
                            <div class="col-md-5">
                                <strong>Trạng thái:</strong>
                            </div>
                            <div class="col-md-7">
                                @if ($order->status == 0)
                                <span class="badge bg-warning">Chờ xử lý</span>
                                @elseif ($order->status == 1)
                                <span class="badge bg-info">Đang xử lý</span>
                                @elseif ($order->status == 2)
                                <span class="badge bg-success">Hoàn thành</span>
                                @else
                                <span class="badge bg-danger">Đã hủy</span>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-5">
                                <strong>Ngày tạo:</strong>
                            </div>
                            <div class="col-md-7">
                                {{ $order->created_at->format('d/m/Y H:i') }}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <h5 class="mb-3">Sản phẩm trong đơn hàng</h5>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($order->orderProducts as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ number_format($item->product->price, 0, ',', '.') }} ₫</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ number_format($item->product->price * $item->amount, 0, ',', '.') }} ₫</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Không có sản phẩm</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Tổng cộng:</strong>
                            </div>
                            <div class="col-md-6 text-end">
                                <h5 class="text-success">{{ number_format($order->total_price, 0, ',', '.') }} ₫</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <h5 class="mb-3">Cập nhật trạng thái</h5>
                <form action="{{ route('admin.orders.update', $order) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-select" id="status" name="status">
                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chờ xử lý</option>
                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đang xử lý</option>
                            <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Hoàn thành</option>
                            <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Đã hủy</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Cập nhật trạng thái
                    </button>
                </form>

                <hr>

                <div class="d-flex gap-2 justify-content-end mt-4">
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                    <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
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