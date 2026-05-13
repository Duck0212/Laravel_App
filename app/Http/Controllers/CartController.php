<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected function getCart(Request $request)
    {
        return $request->session()->get('cart', []);
    }

    protected function saveCart(Request $request, array $cart)
    {
        $request->session()->put('cart', $cart);
    }

    public function index(Request $request)
    {
        $cart = $this->getCart($request);
        $productIds = array_keys($cart);

        $products = Product::whereIn('id', $productIds)->get()->map(function (Product $product) use ($cart) {
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

        $total = $products->sum('subtotal');

        return view('cart', [
            'cartProducts' => $products,
            'total' => $total,
            'cartCount' => array_sum(array_column($cart, 'quantity')),
        ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
        ]);

        $product = Product::findOrFail($request->input('product_id'));
        $quantity = max(1, (int) $request->input('quantity', 1));

        $cart = $this->getCart($request);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img,
                'quantity' => $quantity,
            ];
        }

        $this->saveCart($request, $cart);

        return redirect()->route('cart')->with('success', 'Đã thêm sản phẩm vào giỏ hàng.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = $this->getCart($request);
        $productId = $request->input('product_id');

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = (int) $request->input('quantity');
            $this->saveCart($request, $cart);
        }

        return redirect()->route('cart');
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $cart = $this->getCart($request);
        $productId = $request->input('product_id');

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            $this->saveCart($request, $cart);
        }

        return redirect()->route('cart');
    }
}
