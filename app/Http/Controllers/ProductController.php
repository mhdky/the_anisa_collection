<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        return view('product.index', [
            'title' => 'Anisa Collection - All Product',
            'products' => Product::latest()->searching()->paginate(12)->withQueryString()
        ]);
    }

    public function productCategory(Category $category) {
        return view('product.index', [
            'title' => 'Anisa Collection - ' . $category->name,
            'products' => $category->product()->latest()->paginate(12)->withQueryString()
        ]);
    }

    public function detailProduct(Product $product) {
        return view('product.detail', [
            'title' => 'Anisa Collection - ' . $product->name,
            'product' => $product
        ]);
    }
}
