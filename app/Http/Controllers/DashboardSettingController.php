<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    // tampilan setting
    public function index(Request $request) {
        $user = $request->user();
        return view('admin-dashboard.setting.index', [
            'title' => 'Anisa Collection - Setting'
        ]);
    }
}
