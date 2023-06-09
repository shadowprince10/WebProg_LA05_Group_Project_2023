<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function viewProducts() {
        $products = Product::paginate(5);
        return view('products', compact('products'));
    }

    public function viewBasedOnCategory() {

    }

    public function addProduct() {

    }

    public function storeProduct() {

    }

    public function editProduct() {

    }

    public function updateProduct() {

    }

    public function deleteProduct() {

    }
}
