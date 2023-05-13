<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\StoreInformation;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class BagController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id)->get();
        } else {
            $bag = collect();
        }
        
        return view('bag.index', compact('order', 'bag'), [
            'title' => 'Shopping Bag | Anisa Collection',
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag
        ]);
    }

    // delete product on bag
    public function destroy(OrderDetail $orderDetail) {

        $order = Order::where('id', $orderDetail->order_id)->first();
        $order->total_price = $order->total_price - $orderDetail->total_price;
        $order->update();

        $orderDetail->delete();

        return back();
    }
}
