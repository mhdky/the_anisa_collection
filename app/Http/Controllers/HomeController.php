<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Anisa Collection - Live for fashion',
            'products' => Product::latest()->take(4)->get()
        ]);
    }
}
