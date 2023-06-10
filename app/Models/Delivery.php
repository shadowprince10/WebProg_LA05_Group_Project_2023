<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'deliveries';
    public $fillable = ['pickupLocation', 'destination', 'cost'];

    public function order() {
        return $this -> hasMany(Order::class);
    }
}
