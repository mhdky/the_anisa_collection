<?php

namespace App\Http\Controllers;

use App\Models\StoreInformation;
use Illuminate\Http\Request;

class BagController extends Controller
{
    public function index() {
        return view('bag.index', [
            'title' => 'Bag - Anisa Collection',
            'storeInformation' => StoreInformation::first()
        ]);
    }
}
