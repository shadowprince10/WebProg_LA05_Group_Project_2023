<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use App\Models\Courier;
use App\Models\Shipping;
use App\Models\Transaction;

// attribute: orderID, orderDate, orderStatus, userID (foreign key), productID (foreign key), created_at, updated_at
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $fillable = ['orderDate', 'status'];

    public function product() {
        return $this -> belongsTo(Product::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function courier() {
        return $this -> belongsTo(Courier::class);
    }

    public function shipping() {
        return $this -> belongsTo(Shipping::class);
    }

    public function transaction() {
        return $this -> belongsTo(Transaction::class);
    }

    public function orderDetails() {
        return $this -> belongsTo(orderDetails::class);
    }

    /*
    public function courier() {
        return $this -> belongsTo(Courier::class);
    }
    */
}
