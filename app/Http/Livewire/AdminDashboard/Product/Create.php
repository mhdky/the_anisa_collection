<?php

namespace App\Http\Livewire\AdminDashboard\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $url;
    public $detail;
    public $price;
    public $image;
    public $stock;
    public $size;
    public $merek;
    public $bahan;
    public $jenis_lengan;
    public $uniqueId;

    protected $rules = [
        'category_id' => 'required|min:1|max:255',
        'name' => 'required|min:5|max:254',
        'detail' => 'required|min:5|max:1000',
        'price' => 'required|min:1|max:254',
        'image' => 'image|max:1024',
        'stock' => 'required|min:1|max:254',
        'size' => 'required|min:1|max:5',
        'merek' => 'required|min:2|max:254',
        'bahan' => 'required|min:2|max:254',
        'jenis_lengan' => 'required|min:2|max:254'
    ];

    public function mount()
    {
        $this->uniqueId = uniqid();
    }

    public function store() {
        $this->validate();

        Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'url' => $this->uniqueId,
            'detail' => $this->detail,
            'price' => $this->price,
            'image' => $this->image->store('photos'),
            'stock' => $this->stock,
            'size' => $this->size,
            'merek' => $this->merek,
            'bahan' => $this->bahan,
            'jenis_lengan' => $this->jenis_lengan,
        ]);

        $this->image = NULL;
        $this->reset();

        session()->flash('ok', 'Postingan baru telah ditambahkan');
    }
    
    public function render()
    {
        return view('livewire.admin-dashboard.product.create', [
            'categories' => Category::all()
        ]);
    }
}
