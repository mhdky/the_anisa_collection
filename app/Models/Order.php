<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['shipping_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function order_detail() {
        return $this->hasMany(OrderDetail::class);
    }

    public function shipping() {
        return $this->hasMany(Shipping::class);
    }
}
