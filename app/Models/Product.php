<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeSearching($query) {
        if(request('search')) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        }
    }
}
