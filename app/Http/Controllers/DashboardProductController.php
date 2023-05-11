<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // if ($product->image) {
        //     Storage::delete($product->image);
        // }

        // $product->delete();

        // $order_detail_delete = OrderDetail::where('product_id', $product->id)->get();
        // $order = Order::where('id', $order_detail_delete->id)->first();
        // $order->total_price = $order->total_price - $order_detail_delete->total_price;
        // $order->update();

        // $order_detail = OrderDetail::where('product_id', $product->id)->first();
        // $order_detail->delete();

        // return response()->json([
        //     'message' => 'product berhasil dihapus'
        // ]);


        // if ($product->image) {
        //     Storage::delete($product->image);
        // }
    
        // $order_detail_delete = OrderDetail::where('product_id', $product->id)->first();
        // $order = Order::where('id', $order_detail_delete->order_id)->first();
        // $shipping = Shipping::all();
        // $shipping_cost = City::where('id', $shipping->city_id)->first();
        // $order->total_price = $order->total_price - $order_detail_delete->total_price;
        // $order->total_amount = $order->total_price + $shipping_cost->shipping_cost;
        // $order->update();
    
        // $order_detail_delete->delete();
    
        // // Cek apakah tidak ada OrderDetail terkait lainnya
        // $remaining_order_detail = OrderDetail::where('order_id', $order->id)->exists();
        // if (!$remaining_order_detail) {
        //     $order->delete();
        // }
    
        // $product->delete();
    
        // return response()->json([
        //     'message' => 'Product berhasil dihapus'
        // ]);



        // mantap
        // if ($product->image) {
        //     Storage::delete($product->image);
        // }
    
        // $order_detail_delete = OrderDetail::where('product_id', $product->id)->first();
        // $order = Order::where('id', $order_detail_delete->order_id)->first();
        // $shipping = Shipping::first(); // Ubah `all()` menjadi `first()`
        // $shipping_cost = City::where('id', $shipping->city_id)->first();
        // $order->total_price = $order->total_price - $order_detail_delete->total_price;
        // $order->total_amount = $order->total_price + $shipping_cost->shipping_cost; // Tambahkan shipping_cost ke total_amount
        // $order->update();
    
        // $order_detail_delete->delete();
    
        // // Cek apakah tidak ada OrderDetail terkait lainnya
        // $remaining_order_detail = OrderDetail::where('order_id', $order->id)->exists();
        // if (!$remaining_order_detail) {
        //     $order->delete();
        // }
    
        // $product->delete();
    
        // return response()->json([
        //     'message' => 'Product berhasil dihapus'
        // ]);

        // mantap 2
        // Cek apakah ada OrderDetail terkait dengan produk yang akan dihapus
        $order_details = OrderDetail::where('product_id', $product->id)->get();

        // Hapus OrderDetail terkait jika ada
        foreach ($order_details as $order_detail) {
            $order = Order::find($order_detail->order_id);
            if ($order) {
                $order->total_price -= $order_detail->total_price;
                $order->total_amount = $order->total_price + $order->ongkos_kirim_pembeli;
                $order->update();
            }
            $order_detail->delete();
        }

        // Hapus produk
        $product->delete();

        return response()->json([
            'message' => 'Product berhasil dihapus'
        ]);
    }
}
