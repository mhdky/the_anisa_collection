<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $request, Product $product) {

        if($request->total_order > $product->stock) {
            return back()->with('gagal', 'Jumlah pesanan tidak boleh lebih dari stock');
        } elseif($request->total_order < 1) {
            return back()->with('gagal', 'Masukan jumlah pesanan');
        }

        // database order
        $cek_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(empty($cek_order)){
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->status = 0;
            $order->total_price = 0;
            $order->save();
        }

        // order detail
        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $cek_order_detail = OrderDetail::where('product_id', $product->id)->where('order_id', $new_order->id)->first();
        
        if(empty($cek_order_detail)) {
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
}
