<?php

namespace App\Http\Livewire\Dashboard\Setting;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdatePassword extends Component
{
    public $state = [
        'current_password' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    public function updatePassword()
    {
        $this->validate([
            'state.current_password' => 'required',
            'state.password' => 'required|confirmed|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($this->state['current_password'], $user->password)) {
            $this->addError('state.current_password', 'Password saat ini salah.');
            return;
        }

        $user->update([
            'password' => Hash::make($this->state['password']),
        ]);

        $this->state = [
            'current_password' => '',
            'password' => '',
            'password_confirmation' => '',
        ];

        session()->flash('ok', 'Data berhasil tersimpan');
    }

    public function render()
    {
        return view('livewire.dashboard.setting.update-password');
    }
}
