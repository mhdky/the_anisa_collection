<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Province;
use App\Models\Shipping;
use App\Models\StoreInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index() {

        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        if(!empty($order->url)) {
            if ($order->url === 'back' || $bag->count() < 1) {
                return back();
            }
        }        
        
        return view('product.checkout', compact('order', 'bag'),[
            'title' => 'Check Out Product | Anisa Collection',
            'storeInformation' => StoreInformation::first(),
            'bag' => $bag,
        ]);
    }

    public function store(Request $request, Order $order) {
        if(Auth::check()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $bag = OrderDetail::where('order_id', optional($order)->id);
        } else {
            $bag = collect();
        }

        if(!empty($order->url)) {
            if ($order->url === 'back' || $bag->count() < 1) {
                return back();
            }
        }    
        
        $validateData = $request->validate([
            'city_id' => 'required|max:50',
            'province_id' => 'required|max:50',
            'kecamatan' => 'required|max:50',
            'email_penerima' => 'required|email|max:200',
            'nama_penerima' => 'required|max:200',
            'alamat_penerima' => 'required|max:255',
            'code_pos' => 'required|max:255',
            'nohp_penerima' => 'required|max:17',
            'pesan_penerima' => 'required|max:400',
        ]);

        $shipping = new Shipping;
        $shipping->city_id = $validateData['city_id'];
        $shipping->province_id = $validateData['province_id'];
        $shipping->kecamatan = $validateData['kecamatan'];
        $shipping->email_penerima = $validateData['email_penerima'];
        $shipping->nama_penerima = $validateData['nama_penerima'];
        $shipping->alamat_penerima = $validateData['alamat_penerima'];
        $shipping->code_pos = $validateData['code_pos'];
        $shipping->nohp_penerima = $validateData['nohp_penerima'];
        $shipping->pesan_penerima = $validateData['pesan_penerima'];
        $shipping->save();

        $shipping_cost = City::where('id', $shipping->city_id)->first();
        $shipping_province = Province::where('id', $shipping->province_id)->first();

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->shipping_id = $shipping->id;
        $order->url = 'back';
        $order->status = 1;
        $order->total_amount = $order->total_price + $shipping_cost->shipping_cost;
        $order->ongkos_kirim_pembeli = $shipping_cost->shipping_cost;
        $order->kota_pembeli = $shipping_cost->name;
        $order->provinsi_pembeli = $shipping_province->name;
        $order->kecamatan_pembeli = $shipping->kecamatan;
        $order->email_pembeli = $shipping->email_penerima;
        $order->nama_pembeli = $shipping->nama_penerima;
        $order->alamat_pembeli = $shipping->alamat_penerima;
        $order->kode_pos_pembeli = $shipping->code_pos;
        $order->nohp_pembeli = $shipping->nohp_penerima;
        $order->pesan_pembeli = $shipping->pesan_penerima;
        $order->url_pembayaran = uniqid();
        $order->update();

        return redirect('/order');
    }
}