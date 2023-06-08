<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: userID (primary key), username, email, password, address, phone, transaction (foreign key)
class AppUser extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $fillable = ['username', 'email', 'password', 'address', 'phone'];

    public function wishlistProducts() {
        return $this -> hasMany(WishlistProduct::class);
    }
}
