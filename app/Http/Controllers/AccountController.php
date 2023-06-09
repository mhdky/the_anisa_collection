<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\StoreInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        // cek jika ada pesanan di halaman bag
        if (Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        // cek jika ada pesanan di halaman order
        if (Auth::check()) {
            $the_orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 0)->where('total_price', '!=', 0)->get();
        } else {
            $the_orders = collect();
        }

        return view('account.index', [
            'title' => 'My Account | Anisa Collection',
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag,
            'the_orders' => $the_orders
        ]);
    }
}
