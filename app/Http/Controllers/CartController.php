<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart() {
        $cart = session('cart', []);

        return view('cart', compact('cart'), ['title' => 'Cart']);
    }

    public function addToCart(Request $request, Product $product) {
        $user = Auth::user();

        // check if the product is already added on the wishlist or already exists on the wishlist
        if(!$user -> cart() -> where('productID', $product -> productID) -> first()) {
            if ($cart) {
                $cart -> product -> quantity += $request -> quantity;
                $cart -> save();
            }
            else {
                $cart = new Cart();
                $cart -> userID = $user -> id;
                $cart -> productID = $product -> productID;
                $cart -> quantity = $request -> quantity;
                $cart -> save();
            }
        }

        return redirect() -> route('products.view');
    }

    public function removeFromCart(Cart $cart) {
        $cart -> delete();

        return redirect() -> route('cart.view');
    }

    public function checkout() {
        return view('checkout');
    }
}
