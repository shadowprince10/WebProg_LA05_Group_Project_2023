<?php

namespace App\Http\Controllers;
use App\Models\AppUser;
use App\Models\WishlistProduct;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function viewWishlist($userID) {
        $app_user = AppUser::find($userID);
        $wishlistProducts = $app_user -> wishlistProducts() -> with('product') -> get();
        // with('product') loads product model for each wishlist

        return view('wishlist', ['wishlistProducts' => $wishlistProducts]);
    }

    public function addToWishlist(Request $request, $userID) {
        $app_user = AppUser::find($userID);
        $productID = $request -> input('productID');

        $wishlistProduct = new WishlistProduct();
        $wishlistProduct -> userID = $userID;
        $wishlistProduct -> productID = $productID;
        $wishlistProduct -> save();

        return response() -> json(['message' => 'Product added to the wishlist!']);
    }

    public function removeFromWishlist (Request $request) {
        $app_user = AppUser::find($userID);
        $productID = $request -> input('productID');

        WishlistProduct::where('userID', $app_user) -> where('productID', $productID) -> delete();

        return response() -> json(['message' => 'Product removed from the wishlist!']);
    }
    // mahasiswa_2.blade.php
    // ada $mahasiswa di dalam root mahasiswa_2.blade.php, lalu return mahasiswa_2.blade.php dengan $mahasiswa diganti dengan array data $items_list
    // paling berguna kalau sudah connect dengan database
}
