<?php

namespace App\Http\Livewire\Product;

use App\Models\City;
use App\Models\Province;
use Livewire\Component;

class ShippingCost extends Component
{
    public $provinceId;
    public $cityId;

    public function render()
    {
        return view('livewire.product.shipping-cost', [
            'provinces' => Province::all(),
            'cities' => $this->getCities(),
        ]);
    }

    public function getCities()
    {
        return $this->provinceId
            ? City::where('province_id', $this->provinceId)->get()
            : collect();
    }
}