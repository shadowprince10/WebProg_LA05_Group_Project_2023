<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class Cart extends Model
{
    use HasFactory;

    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function product() {
        return $this -> belongsTo(Product::class);
    }

    public function order() {
        return $this -> hasOne(Order::class);
    }
}
