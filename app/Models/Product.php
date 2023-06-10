<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;
use App\Models\Delivery;
use App\Models\Transaction;
use App\Models\Wishlist;

// attribute: productID (primary key), productName, description, price, discount, stock, productQuantity, productRating, productImg (gambar produk), wishFlag (untuk dimasukkan ke wishlist oleh user. Kalau heart dipencet, flag 1 berarti product masuk ke wishlist dan sebaliknya, produk tidak diapa-apakan, tidak dimasukkan ke wishlist), created_at, updated_at, categoryID (foreign key), brandID (foreign key), transactionID (foreign key)
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $fillable = ['name', 'description', 'price', 'category', 'discount', 'stock', 'quantity', 'rating', 'image', 'wishFlag'];

    public function category() {
        return $this -> belongsTo(Category::class);
    }

    public function order() {
        return $this -> belongsTo(Order::class);
    }

    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function transaction() {
        return $this -> belongsTo(Transaction::class);
    }

    public function wishlist() {
        return $this -> belongsTo(Wishlist::class);
    }
}
