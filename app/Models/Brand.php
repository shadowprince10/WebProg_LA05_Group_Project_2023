<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: brandID (primary key), brandName, brandRating, description, created_at, updated_at, categoryID (foreign key), productID (foreign key)
class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    public $fillable = ['brandName', 'brandRating', 'description'];
}
