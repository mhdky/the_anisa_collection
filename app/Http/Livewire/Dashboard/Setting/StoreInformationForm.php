<?php

namespace App\Http\Livewire\Dashboard\Setting;

use App\Models\StoreInformation;
use Livewire\Component;

class StoreInformationForm extends Component
{
    public $storeId;
    public $store_address;
    public $phone_number;
    public $store_email;
    public $instagram;
    public $facebook;
    public $open;
    public $close;

    public function mount()
    {
        $store = StoreInformation::first();
        $this->store_address = $store->store_address;
        $this->phone_number = $store->phone_number;
        $this->store_email = $store->store_email;
        $this->instagram = $store->instagram;
        $this->facebook = $store->facebook;
        $this->open = $store->open;
        $this->close = $store->close;
    }

    public function updateStore() {
        $validateData = $this->validate([
            'store_address' => ['required', 'string', 'min:3', 'max:255'],
            'phone_number' => ['required', 'min:3', 'max:30'],
            'store_email' => ['required', 'email', 'min:3', 'max:255'],
            'instagram' => ['url', 'max:255'],
            'facebook' => ['url', 'max:255'],
            'open' => ['required', 'max:5'],
            'close' => ['required', 'max:5'],
        ]);

        $store = StoreInformation::first();
        $store->update($validateData);

        session()->flash('ok', 'Data berhasil tersimpan');
    }

    public function render()
    {
        return view('livewire.dashboard.setting.store-information-form');
    }
}
