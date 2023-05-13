<?php

namespace App\Http\Livewire\Account;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePessword extends Component
{
    public $state = [
        'current_password' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    public function updatePassword()
    {
        $this->validate([
            'state.current_password' => 'required|max:255',
            'state.password' => 'required|confirmed|min:8|max:255',
        ]);

        $user = Auth::user();

        if (!Hash::check($this->state['current_password'], $user->password)) {
            $this->addError('state.current_password', 'The current password is incorrect');
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
        return view('livewire.account.change-pessword');
    }
}
