<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: shipID (primary key), pickupLocation, destination, deliveryCost, created_at, updated_at, orderID (foreign key), orderDetailID (foreign key), productID (foreign key), userID (foreign key), courierID (foreign key)
// ship type tidak ada karena delivery produk game console yang di-rental atau disewa hanya di daerah lokal atau shipping via darat saja
class Shipping extends Model
{
    use HasFactory;

    protected $table = 'shippings';
    public $fillable = ['pickupLocation', 'destination', 'cost'];
}
