<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home Page
    public function home()
    {
        $home = Product::all();
        return view('home', ['products' => $home]);
    }

    //Product Detail Page
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('product-detail', compact('product'));
    }

    //Search Page
    public function search(Request $request)
    {
        $query = $request->input('q', '');
        $sortBy = $request->input('sort', 'popular');

        $productsQuery = Product::with('category');

        // Search logic - tìm kiếm gần đúng trong name và desc
        if (!empty($query)) {
            $productsQuery->where(function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%')
                    ->orWhere('desc', 'like', '%' . $query . '%');
            });
        }

        // Sort logic
        switch ($sortBy) {
            case 'price_low':
                $productsQuery->orderBy('price', 'asc');
                break;
            case 'price_high':
                $productsQuery->orderBy('price', 'desc');
                break;
            case 'newest':
                $productsQuery->orderBy('created_at', 'desc');
                break;
            case 'popular':
            default:
                // Giả sử popular là theo ID hoặc có thể thêm trường view_count sau
                $productsQuery->orderBy('id', 'desc');
                break;
        }

        $products = $productsQuery->paginate(12)->withQueryString();

        return view('search', [
            'products' => $products,
            'query' => $query,
            'sortBy' => $sortBy
        ]);
    }

    //Category Page
    public function category($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $products = Product::with('category')
            ->where('category_id', $categoryId)
            ->paginate(12);

        return view('category', [
            'products' => $products,
            'category' => $category,
        ]);
    }

    public function cart()
    {
        return view('cart');
    }

    //Checkout Page
    public function checkout()
    {
        return view('checkout');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
