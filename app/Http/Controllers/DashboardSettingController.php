<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    // tampilan setting
    public function index(Request $request) {
        $user = $request->user();

        $orders = Order::where('status_pembayaran', '!=', 0)->where('total_price', '!=', 0)
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

        return view('admin-dashboard.setting.index', [
            'title' => 'Anisa Collection - Setting',
            'orders' => $orders
        ]);
    }
}
