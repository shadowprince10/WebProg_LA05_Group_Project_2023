<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: orderID, orderDate, orderStatus, userID (foreign key), productID (foreign key), created_at, updated_at
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $fillable = ['orderDate, orderStatus'];

    public function product() {
        return $this -> belongsTo(Product::class);
    }

    public function brand() {
        return $this -> belongsTo(Brand::class);
    }

    /*
    public function courier() {
        return $this -> belongsTo(Courier::class);
    }
    */
}
