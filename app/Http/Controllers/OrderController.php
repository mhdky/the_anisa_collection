<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\StoreInformation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $request, Product $product)
    {

        if ($request->total_order > $product->stock) {
            return back()->with('gagal', 'Jumlah pesanan tidak boleh lebih dari stock');
        } elseif ($request->total_order < 1) {
            return back()->with('gagal', 'Masukan jumlah pesanan');
        }

        // database order
        $cek_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($cek_order)) {
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->url = uniqid();
            $order->status = 0;
            $order->total_price = 0;
            $order->total_amount = 0;
            $order->save();
        }

        // order detail
        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $cek_order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();

        if (empty($cek_order_detail)) {
            $order_detail = new OrderDetail;
            $order_detail->product_id = $product->id;
            $order_detail->order_id = $new_order->id;
            $order_detail->total_order = $request->total_order;
            $order_detail->total_price = $product->price * $request->total_order;
            $order_detail->save();
        } else {
            $order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
            $order_detail->total_order = $order_detail->total_order + $request->total_order;

            $new_total_price = $product->price * $request->total_order;
            $order_detail->total_price = $order_detail->total_price + $new_total_price;
            $order_detail->update();
        }

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->total_price = $order->total_price + $product->price * $request->total_order;
        $order->update();

        return back()->with('ok', 'Successfully added to shopping bag');
    }

    public function index()
    {
        if (Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        $orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->where('total_price', '!=', 0)->latest()->get();

        $products = [];

        foreach ($orders as $order) {
            $orderDetails = $order->order_detail()->latest()->get();
            foreach ($orderDetails as $orderDetail) {
                $products[] = $orderDetail->product;
            }
        }

        // cek jika ada pesanan di halaman order
        if (Auth::check()) {
            $the_orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->where('total_price', '!=', 0)->get();
        } else {
            $the_orders = collect();
        }

        return view('product.order', [
            'title' => 'My Order | Anisa Collection',
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag,
            'orders' => $orders,
            'the_orders' => $the_orders
        ]);
    }

    // pay order
    public function pay($url_pembayaran)
    {
        try {
            if (Auth::check()) {
                $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
                $bag = OrderDetail::where('order_id', optional($order)->id);
            } else {
                $bag = collect();
            }

            $pembayaran = Order::where('user_id', Auth::user()->id)->where('url_pembayaran', $url_pembayaran)->where('status', '!=', 0)->firstOrFail();

            // cek jika ada pesanan di halaman order
            if (Auth::check()) {
                $the_orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->where('total_price', '!=', 0)->get();
            } else {
                $the_orders = collect();
            }

            return view('product.pay', [
                'title' => 'Pay Product - Anisa Collection',
                'storeInformation' => StoreInformation::first(),
                'bag' => $bag,
                'pembayaran' => $pembayaran,
                'the_orders' => $the_orders
            ]);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    // update order pay
    public function payStore(Request $request, Order $order)
    {
        $validateData = $request->validate([
            'tanggal_pembayaran' => 'required|max:11',
            'nama_akun_bank' => 'required|max:30',
            'nama_bank' => 'required|max:30',
            'jumlah_transfer' => 'required|max:30',
            'gambar_bukti_pembayaran' => 'required|image|file|max:1080',
        ]);

        $validateData['gambar_bukti_pembayaran'] = $request->file('gambar_bukti_pembayaran')->store('bukti-pembayaran');

        $order = Order::where('user_id', Auth::user()->id)->where('id', $order->id)->where('status', '!=', 0)->first();
        $order->tanggal_pembayaran = $validateData['tanggal_pembayaran'];
        $order->tanggal_pemesanan = Carbon::now()->format('Y-m-d H:i:s');
        $order->nama_akun_bank = $validateData['nama_akun_bank'];
        $order->nama_bank = $validateData['nama_bank'];
        $order->jumlah_transfer = $validateData['jumlah_transfer'];
        $order->gambar_bukti_pembayaran = $validateData['gambar_bukti_pembayaran'];
        $order->status_pembayaran = 1;
        $order->update();

        $order_details = OrderDetail::where('order_id', $order->id)->get();
        foreach ($order_details as $order_detail) {
            $product = Product::where('id', $order_detail->product_id)->first();
            $product->stock = $product->stock - $order_detail->total_order;
            $product->update();
        }

        return back()->with('ok', 'Konfirmasi Pembayaran Berhasil Terkirim');
    }

    // update order pay second
    public function payStoreSecond(Request $request, Order $order)
    {
        $validateData = $request->validate([
            'tanggal_pembayaran' => 'required|max:11',
            'nama_akun_bank' => 'required|max:30',
            'nama_bank' => 'required|max:30',
            'jumlah_transfer' => 'required|max:30',
            'gambar_bukti_pembayaran' => 'image|file|max:1080',
        ]);

        if ($request->file('gambar_bukti_pembayaran')) {
            $validateData['gambar_bukti_pembayaran'] = $request->file('gambar_bukti_pembayaran')->store('bukti-pembayaran');
        }

        $order = Order::where('user_id', Auth::user()->id)->where('id', $order->id)->where('status', '!=', 0)->first();
        $order->tanggal_pembayaran = $validateData['tanggal_pembayaran'];
        $order->nama_akun_bank = $validateData['nama_akun_bank'];
        $order->nama_bank = $validateData['nama_bank'];
        $order->jumlah_transfer = $validateData['jumlah_transfer'];
        if ($request->file('gambar_bukti_pembayaran')) {
            $order->gambar_bukti_pembayaran = $validateData['gambar_bukti_pembayaran'];
        }
        $order->status_pembayaran = 1;
        $order->update();

        return back()->with('ok', 'Konfirmasi Pembayaran Berhasil Terkirim');
    }
}
