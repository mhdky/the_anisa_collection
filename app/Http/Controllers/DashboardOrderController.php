<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardOrderController extends Controller
{
    public function index() {
        $orders = Order::where('status', '!=', 0)->latest()->get();

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
}
