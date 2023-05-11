<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cities() {
        return $this->belongsTo(City::class);
    }

    public function provinces() {
        return $this->belongsTo(Province::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
