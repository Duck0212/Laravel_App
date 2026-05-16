<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(15);
        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function show(Order $order)
    {
        $order->load('user', 'orderProducts.product');
        return view('admin.orders.show', ['order' => $order]);
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|integer|in:0,1,2,3',
        ]);

        $order->update($validated);
        return redirect()->route('admin.orders.show', $order)->with('success', 'Đơn hàng đã được cập nhật!');
    }

    public function destroy(Order $order)
    {
        $order->orderProducts()->delete();
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được xóa!');
    }
}
