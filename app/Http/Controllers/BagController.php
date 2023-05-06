<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\StoreInformation;
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
            'title' => 'Bag - Anisa Collection',
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag
        ]);
    }
}
