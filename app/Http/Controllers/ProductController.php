<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\StoreInformation;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show() {
        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        return view('product.index', [
            'title' => 'Anisa Collection - All Product',
            'products' => Product::where('stock', '>' , 0)->latest()->searching()->paginate(12)->withQueryString(),
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag
        ]);
    }

    public function productCategory(Category $category) {
        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        return view('product.index', [
            'title' => $category->name . ' | Anisa Collection',
            'products' => $category->product()->where('stock', '>' , 0)->latest()->paginate(12)->withQueryString(),
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag
        ]);
    }

    public function detailProduct(Product $product) {
        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        return view('product.detail', [
            'title' => $product->name . ' | Anisa Collection',
            'product' => $product,
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag
        ]);
    }
}
