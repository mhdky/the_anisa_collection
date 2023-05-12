<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DashboardOrderController extends Controller
{
    public function index() {
        $orders = Order::where('status_pembayaran', '!=', 0)
        ->orderByRaw('ISNULL(nomor_resi) DESC')
        ->orderByDesc('created_at')
        ->get();;

        $products = [];
        
        foreach ($orders as $order) {
            $orderDetails = $order->order_detail()->latest()->get();
            foreach ($orderDetails as $orderDetail) {
                $products[] = $orderDetail->product;
            }
        }

        return view('admin-dashboard.product.order', [
            'title' => 'Order | Anisa Collection',
            'orders' => $orders,
        ]);
    }

    public function store(Request $request, Order $order) {
        $validateData = $request->validate([
            'nomor_resi' => 'required|max:30',
        ]);

        $order = Order::where('id', $order->id)->where('status_pembayaran', '!=', 0)->first();
        $order->nomor_resi = $validateData['nomor_resi'];
        $order->update();
        
        return back()->with('ok', 'Nomor resi berhasil terkirim');
    }
}
