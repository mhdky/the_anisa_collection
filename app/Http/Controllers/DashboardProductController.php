<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    // tampil produk
    public function index() {
        return view('admin-dashboard.product.index', [
            'title' => 'Anisa Collection - Admin Dashboard - Product',
            'products' => Product::latest()->searchingDashboard()->paginate(12)->withQueryString()
        ]);
    }

    // halaman tambah produk
    public function create() {
        return view('admin-dashboard.product.add', [
            'title' => 'Anisa Collection - Tambah Produk',
            'categories' => Category::all()
        ]);
    }

    // form tambah produk
    public function store(Request $request) {
        $validateData = $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:1|max:200',
            'detail' => 'required|min:1|max:100000',
            'price' => 'required|min:1|max:15',
            'image' => 'required|image|file|max:1024',
            'stock' => 'required|min:1|max:15',
            'size' => 'required',
            'merek' => 'max:30',
            'bahan' => 'max:100',
            'jenis_lengan' => 'max:100',
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('file');
        }

        Product::create($validateData);

        return redirect('/dashboard/product')->with('ok', 'Produk berhasil ditambahkan');
    }

    // halaman edit product
    public function edit(Product $product) {
        return view('admin-dashboard.product.edit', [
            'title' => 'Anisa Collection - Halaman Edit Produk',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
    
    // update product
    public function update(Request $request, Product $product) {
        $validateData = $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:1|max:200',
            'detail' => 'required|min:1|max:100000',
            'price' => 'required|min:1|max:15',
            'image' => 'image|file|max:1024',
            'stock' => 'required|min:1|max:15',
            'size' => 'required',
            'merek' => 'max:30',
            'bahan' => 'max:100',
            'jenis_lengan' => 'max:100',
        ]);

        if($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            } 
            $validateData['image'] = $request->file('image')->store('file');
        }

        Product::where('id', $product->id)->update($validateData);

        return redirect('/dashboard/product');
    }

    // delete product
    public function destroy(Product $product) {
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();

        return response()->json([
            'message' => 'product berhasil dihapus'
        ]);
    }
}
