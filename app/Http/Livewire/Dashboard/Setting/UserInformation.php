<?php

namespace App\Http\Livewire\Dashboard\Setting;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserInformation extends Component
{
    public $name;
    public $email;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        session()->flash('ok', 'Profil berhasil diubah');
    }

    public function render()
    {
        return view('livewire.dashboard.setting.user-information');
    }
}
