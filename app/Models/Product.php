<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'url'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function order_detail() {
        return $this->hasMany(OrderDetail::class);
    }

    public function scopeSearching($query) {
        if(request('search')) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    public function scopeSearchingDashboard($query) {
        if(request('search')) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        }
    }

    protected static function boot()
    {
        parent::boot();

        // Set URL to a unique value before creating a new product
        static::creating(function ($product) {
            $product->url = Str::random(20); // Generate a random string
            while (static::where('url', $product->url)->exists()) {
                $product->url = Str::random(20);
            }
        });
    }
}
