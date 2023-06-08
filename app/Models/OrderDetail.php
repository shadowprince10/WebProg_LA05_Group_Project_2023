<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: orderDetailsID (primary key), orderID (primary key and foreign key), orderProduct, orderQuantity, orderSubtotal
class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    public $fillable = ['orderProduct', 'orderQuantity', 'orderSubtotal'];
}

