<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: categoryID (primary key), categoryName, productID (foreign key), brandID (foreign key)
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    public $fillable = ['categoryName'];
}
