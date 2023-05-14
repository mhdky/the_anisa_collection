<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\StoreInformation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        if (Auth::check()) {
            $the_orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->where('total_price', '!=', 0)->get();
        } else {
            $the_orders = collect();
        }

        return view('home', [
            'title' => 'Anisa Collection - Live for fashion',
            'products' => Product::where('stock', '>', 0)->latest()->take(4)->get(),
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag,
            'the_orders' => $the_orders
        ]);
    }
}
