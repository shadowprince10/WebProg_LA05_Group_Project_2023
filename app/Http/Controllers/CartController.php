<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart() {
        $cartProducts = session('cart', []);

        return view('cart', compact('cartProducts'));
    }
}
