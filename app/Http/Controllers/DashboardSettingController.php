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
            'title' => 'Anisa Collection - Setting',
            'user' => $user
        ]);
    }

    // update profile information
    public function update(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:30|unique:users,email,'.$user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // $user->update();

        return redirect('/dashboard/setting');
    }
}
