<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    protected function getCart(Request $request)
    {
        return $request->session()->get('cart', []);
    }

    protected function prepareCartProducts(array $cart)
    {
        if (empty($cart)) {
            return collect();
        }

        return Product::whereIn('id', array_keys($cart))->get()->map(function (Product $product) use ($cart) {
            $quantity = $cart[$product->id]['quantity'] ?? 0;

            return (object) [
                'id' => $product->id,
                'name' => $product->name,
                'img' => $product->img,
                'price' => $product->price,
                'quantity' => $quantity,
                'subtotal' => $product->price * $quantity,
            ];
        });
    }

    public function show(Request $request)
    {
        $cartProducts = $this->prepareCartProducts($this->getCart($request));
        $total = $cartProducts->sum('subtotal');

        return view('checkout', [
            'cartProducts' => $cartProducts,
            'total' => $total,
        ]);
    }

    public function process(Request $request)
    {
        $cart = $this->getCart($request);
        $cartProducts = $this->prepareCartProducts($cart);

        if ($cartProducts->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Giỏ hàng đang trống. Vui lòng thêm sản phẩm trước khi thanh toán.');
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'payment' => 'required|in:cod,bank,wallet',
        ]);

        $user = $request->user() ?? User::firstOrCreate(
            ['email' => 'guest@freshharvest.local'],
            ['name' => 'Khách vãng lai', 'password' => bcrypt('guest123')]
        );

        $paymentLabels = [
            'cod' => 'Thanh toán khi nhận hàng',
            'bank' => 'Chuyển khoản ngân hàng',
            'wallet' => 'Ví điện tử',
        ];

        $order = DB::transaction(function () use ($data, $cartProducts, $user, $paymentLabels) {
            $order = new Order();
            $order->name = $data['name'];
            $order->desc = sprintf('%s, %s, %s - %s', $data['address'], $data['district'], $data['city'], $paymentLabels[$data['payment']] ?? 'Thanh toán khi nhận hàng');
            $order->user_id = $user->id;
            $order->status = 1;
            $order->receiver = $data['phone'];
            $order->save();

            foreach ($cartProducts as $item) {
                $orderProduct = new OrderProduct();
                $orderProduct->order_id = $order->id;
                $orderProduct->product_id = $item->id;
                $orderProduct->amount = $item->quantity;
                $orderProduct->save();
            }

            return $order;
        });

        $request->session()->forget('cart');

        return redirect()->route('checkout')->with('success', "Đơn hàng #{$order->id} đã được đặt thành công. Cảm ơn bạn!");
    }
}
