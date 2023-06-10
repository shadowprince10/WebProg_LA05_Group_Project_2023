<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function viewCart() {
        $cart = session('cart', []);
        $cartProducts = Cart::content();
        $deliveryCost = 0;

        foreach ($cartProducts as $cp) {
            $order = $cp -> order;
                if ($order) {
                    $delivery = $order -> delivery;
                    if ($delivery) {
                        $deliveryCost += $delivery -> cost;
                    }
                }
        }

        return view('cart', compact('cart', 'cartProducts', 'deliveryCost'), ['title' => 'Cart']);
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
        $cartProducts = Cart::content();
        $totalCost = 0;

        foreach ($cartProducts as $cp) {
            $order = $cp -> order;
                if ($order) {
                    $delivery = $order -> delivery;
                    if ($delivery) {
                        $totalCost += (($cp -> price) * ($cp -> quantity)) + ($delivery -> cost);
                    }
                }
        }

        return view('checkout', compact('cartProducts', 'totalCost'), ['title' => 'Checkout']);
    }
}
